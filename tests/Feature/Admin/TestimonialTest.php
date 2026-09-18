<?php

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    Storage::fake(Testimonial::DISK);
    $this->admin = User::factory()->create();
});

test('migration seeds the four original reviews', function () {
    expect(Testimonial::ordered()->pluck('name')->all())
        ->toBe(['Daniel R.', 'Sarah M.', 'James T.', 'Aisha K.']);
});

test('index lists reviews with edit and delete controls', function () {
    $first = Testimonial::first();

    $this->actingAs($this->admin)
        ->get(route('admin.testimonials.index'))
        ->assertOk()
        ->assertSee('Testimonials (4)')
        ->assertSee('Daniel R.')
        ->assertSee(route('admin.testimonials.edit', $first))
        ->assertSee(route('admin.testimonials.create'));
});

test('create form renders with 5 stars preselected', function () {
    $this->actingAs($this->admin)
        ->get(route('admin.testimonials.create'))
        ->assertOk()
        ->assertSee('<option value="5" selected', escape: false);
});

test('admin can add a review without a photo', function () {
    $this->actingAs($this->admin)
        ->post(route('admin.testimonials.store'), [
            'name' => 'Nadia H.', 'role' => 'Founder', 'quote' => 'Tracking finally makes sense.', 'rating' => 4,
        ])
        ->assertRedirect(route('admin.testimonials.index'))
        ->assertSessionHas('status', 'Review from Nadia H. added.');

    $t = Testimonial::where('name', 'Nadia H.')->sole();
    expect($t->rating)->toBe(4)
        ->and($t->avatar_path)->toBeNull()
        ->and($t->initial)->toBe('N')
        ->and($t->avatar_url)->toBeNull();
});

test('admin can add a review with a photo', function () {
    $this->actingAs($this->admin)
        ->post(route('admin.testimonials.store'), [
            'name' => 'Omar S.', 'quote' => 'Great work.', 'rating' => 5,
            'avatar' => UploadedFile::fake()->image('omar.jpg', 300, 300),
        ])
        ->assertRedirect(route('admin.testimonials.index'));

    $t = Testimonial::where('name', 'Omar S.')->sole();
    expect($t->avatar_path)->toStartWith(Testimonial::DIRECTORY.'/')
        ->and($t->avatar_url)->toContain('/storage/'.Testimonial::DIRECTORY.'/');
    Storage::disk(Testimonial::DISK)->assertExists($t->avatar_path);
});

test('validation rejects missing fields, bad ratings and non-image photos', function () {
    $this->actingAs($this->admin)
        ->post(route('admin.testimonials.store'), [
            'name' => '', 'quote' => '', 'rating' => 9,
            'avatar' => UploadedFile::fake()->create('cv.pdf', 50, 'application/pdf'),
        ])
        ->assertSessionHasErrors(['name', 'quote', 'rating', 'avatar']);

    expect(Testimonial::count())->toBe(4);
});

test('admin can edit a review', function () {
    $t = Testimonial::where('name', 'Sarah M.')->sole();

    $this->actingAs($this->admin)
        ->get(route('admin.testimonials.edit', $t))
        ->assertOk()
        ->assertSee('value="Sarah M."', escape: false);

    $this->actingAs($this->admin)
        ->put(route('admin.testimonials.update', $t), [
            'name' => 'Sarah M.', 'role' => 'Store Owner', 'quote' => 'Updated quote.', 'rating' => 3,
        ])
        ->assertRedirect(route('admin.testimonials.index'))
        ->assertSessionHas('status', 'Review from Sarah M. saved.');

    $t->refresh();
    expect($t->role)->toBe('Store Owner')->and($t->quote)->toBe('Updated quote.')->and($t->rating)->toBe(3);
});

test('editing can replace or remove the photo', function () {
    $t = Testimonial::first();
    $old = UploadedFile::fake()->image('old.png')->store(Testimonial::DIRECTORY, Testimonial::DISK);
    $t->update(['avatar_path' => $old]);

    // replace
    $this->actingAs($this->admin)->put(route('admin.testimonials.update', $t), [
        'name' => $t->name, 'quote' => $t->quote, 'rating' => 5,
        'avatar' => UploadedFile::fake()->image('new.png'),
    ]);
    $t->refresh();
    Storage::disk(Testimonial::DISK)->assertMissing($old);
    Storage::disk(Testimonial::DISK)->assertExists($t->avatar_path);

    // remove
    $current = $t->avatar_path;
    $this->actingAs($this->admin)->put(route('admin.testimonials.update', $t), [
        'name' => $t->name, 'quote' => $t->quote, 'rating' => 5, 'remove_avatar' => 1,
    ]);
    expect($t->refresh()->avatar_path)->toBeNull();
    Storage::disk(Testimonial::DISK)->assertMissing($current);
});

test('admin can delete a review and its photo', function () {
    $t = Testimonial::first();
    $path = UploadedFile::fake()->image('a.png')->store(Testimonial::DIRECTORY, Testimonial::DISK);
    $t->update(['avatar_path' => $path]);

    $this->actingAs($this->admin)
        ->delete(route('admin.testimonials.destroy', $t))
        ->assertRedirect(route('admin.testimonials.index'))
        ->assertSessionHas('status', "Review from {$t->name} deleted.");

    $this->assertModelMissing($t);
    Storage::disk(Testimonial::DISK)->assertMissing($path);
});

test('guests cannot manage reviews', function () {
    $t = Testimonial::first();

    $this->get(route('admin.testimonials.index'))->assertRedirect(route('admin.login'));
    $this->get(route('admin.testimonials.create'))->assertRedirect(route('admin.login'));
    $this->post(route('admin.testimonials.store'), ['name' => 'X', 'quote' => 'Y', 'rating' => 5])->assertRedirect(route('admin.login'));
    $this->put(route('admin.testimonials.update', $t), ['name' => 'X', 'quote' => 'Y', 'rating' => 5])->assertRedirect(route('admin.login'));
    $this->delete(route('admin.testimonials.destroy', $t))->assertRedirect(route('admin.login'));

    expect(Testimonial::count())->toBe(4)->and($t->refresh()->name)->not->toBe('X');
});

test('home page renders reviews, stars and the summary from the database', function () {
    Testimonial::where('name', 'James T.')->update(['rating' => 4, 'quote' => 'Solid GA4 work.']);

    $this->get('/')
        ->assertOk()
        ->assertSee('&ldquo;Solid GA4 work.&rdquo;', escape: false)
        ->assertSee('aria-label="4 out of 5 stars"', escape: false)
        ->assertSee('Based on 4 client reviews')
        ->assertSee('4.8')            // (5+5+4+5)/4 = 4.75 → 4.8
        ->assertSee('Become the next success story');
});

test('home page uses the photo when one is uploaded', function () {
    $t = Testimonial::first();
    $t->update(['avatar_path' => Testimonial::DIRECTORY.'/photo.jpg']);

    $this->get('/')->assertSee('class="testi-avatar" src="'.$t->avatar_url.'"', escape: false);
});

test('home page hides the testimonials section when there are no reviews', function () {
    Testimonial::query()->delete();

    $this->get('/')
        ->assertOk()
        ->assertDontSee('What Our Clients Say')
        ->assertDontSee('id="testiTrack"', escape: false)
        ->assertSee('My Creative Works');
});
