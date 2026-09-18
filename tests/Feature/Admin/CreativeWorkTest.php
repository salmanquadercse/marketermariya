<?php

use App\Models\CreativeWork;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    Storage::fake(CreativeWork::DISK, ['url' => config('filesystems.disks.'.CreativeWork::DISK.'.url')]);
    $this->admin = User::factory()->create();
});

test('works page lists uploaded screenshots', function () {
    CreativeWork::create(['title' => 'GTM container', 'image_path' => 'creative-works/a.png', 'sort_order' => 1]);

    $this->actingAs($this->admin)
        ->get(route('admin.works.index'))
        ->assertOk()
        ->assertSee('GTM container')
        ->assertSee('Uploaded (1)');
});

test('admin can upload a screenshot', function () {
    $file = UploadedFile::fake()->image('shot.png', 1200, 800);

    $this->actingAs($this->admin)
        ->post(route('admin.works.store'), ['title' => 'Shopify analytics', 'image' => $file])
        ->assertRedirect(route('admin.works.index'))
        ->assertSessionHas('status', 'Screenshot uploaded.');

    $work = CreativeWork::sole();
    expect($work->title)->toBe('Shopify analytics')
        ->and($work->sort_order)->toBe(1)
        ->and($work->image_path)->toStartWith(CreativeWork::DIRECTORY.'/');

    Storage::disk(CreativeWork::DISK)->assertExists($work->image_path);
});

test('uploads are appended after existing ones', function () {
    CreativeWork::create(['image_path' => 'creative-works/a.png', 'sort_order' => 4]);

    $this->actingAs($this->admin)
        ->post(route('admin.works.store'), ['image' => UploadedFile::fake()->image('b.png')]);

    expect(CreativeWork::ordered()->pluck('sort_order')->all())->toBe([4, 5]);
});

test('non-image uploads are rejected', function () {
    $this->actingAs($this->admin)
        ->from(route('admin.works.index'))
        ->post(route('admin.works.store'), ['image' => UploadedFile::fake()->create('notes.pdf', 100, 'application/pdf')])
        ->assertRedirect(route('admin.works.index'))
        ->assertSessionHasErrors('image');

    expect(CreativeWork::count())->toBe(0);
});

test('the image is required', function () {
    $this->actingAs($this->admin)
        ->post(route('admin.works.store'), ['title' => 'No file'])
        ->assertSessionHasErrors('image');
});

test('admin can delete a screenshot and its file', function () {
    $path = UploadedFile::fake()->image('old.png')->store(CreativeWork::DIRECTORY, CreativeWork::DISK);
    $work = CreativeWork::create(['image_path' => $path, 'sort_order' => 1]);

    $this->actingAs($this->admin)
        ->delete(route('admin.works.destroy', $work))
        ->assertRedirect(route('admin.works.index'))
        ->assertSessionHas('status', 'Screenshot deleted.');

    $this->assertModelMissing($work);
    Storage::disk(CreativeWork::DISK)->assertMissing($path);
});

test('guests cannot upload or delete', function () {
    $work = CreativeWork::create(['image_path' => 'creative-works/a.png', 'sort_order' => 1]);

    $this->post(route('admin.works.store'), ['image' => UploadedFile::fake()->image('x.png')])
        ->assertRedirect(route('admin.login'));

    $this->delete(route('admin.works.destroy', $work))
        ->assertRedirect(route('admin.login'));

    expect(CreativeWork::count())->toBe(1);
});

test('home page shows uploaded screenshots instead of placeholders', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Slide 1: GTM Debug View', escape: false);

    CreativeWork::create(['title' => 'Real screenshot', 'image_path' => 'creative-works/real.png', 'sort_order' => 1]);

    $this->get('/')
        ->assertOk()
        ->assertSee('alt="Real screenshot"', escape: false)
        ->assertSee('/uploads/creative-works/real.png')
        ->assertDontSee('Slide 1: GTM Debug View', escape: false);
});
