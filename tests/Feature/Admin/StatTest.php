<?php

use App\Models\Stat;
use App\Models\User;

beforeEach(function () {
    $this->admin = User::factory()->create();
});

test('migration seeds the four original figures', function () {
    expect(Stat::ordered()->pluck('label')->all())
        ->toBe(['Happy Clients', 'Project Completed', 'Years Experience', 'Ad Spend']);
});

test('stats page lists the figures with their current values', function () {
    $this->actingAs($this->admin)
        ->get(route('admin.stats.index'))
        ->assertOk()
        ->assertSee('value="Happy Clients"', escape: false)
        ->assertSee('value="150"', escape: false)
        ->assertSee('value="K$"', escape: false);
});

test('admin can update a figure', function () {
    $stat = Stat::where('label', 'Years Experience')->sole();

    $this->actingAs($this->admin)
        ->put(route('admin.stats.update', $stat), ['label' => 'Years in Marketing', 'value' => '4.5', 'suffix' => '+'])
        ->assertRedirect(route('admin.stats.index'))
        ->assertSessionHas('status', '"Years in Marketing" saved.');

    $stat->refresh();
    expect($stat->label)->toBe('Years in Marketing')
        ->and($stat->value)->toBe(4.5)
        ->and($stat->display_value)->toBe('4.5');
});

test('admin can add a figure, shown last', function () {
    $this->actingAs($this->admin)
        ->post(route('admin.stats.store'), ['label' => 'Campaigns Launched', 'value' => 40, 'suffix' => '+'])
        ->assertRedirect(route('admin.stats.index'))
        ->assertSessionHas('status', 'Stat added.');

    $stat = Stat::where('label', 'Campaigns Launched')->sole();
    expect(Stat::ordered()->get()->last()->is($stat))->toBeTrue();
});

test('admin can delete a figure', function () {
    $stat = Stat::where('label', 'Happy Clients')->sole();

    $this->actingAs($this->admin)
        ->delete(route('admin.stats.destroy', $stat))
        ->assertRedirect(route('admin.stats.index'))
        ->assertSessionHas('status', '"Happy Clients" deleted.');

    $this->assertModelMissing($stat);
});

test('title and numeric value are required', function () {
    $this->actingAs($this->admin)
        ->post(route('admin.stats.store'), ['label' => '', 'value' => 'lots'])
        ->assertSessionHasErrors(['label', 'value']);

    expect(Stat::count())->toBe(4);
});

test('guests cannot change figures', function () {
    $stat = Stat::first();

    $this->put(route('admin.stats.update', $stat), ['label' => 'Hacked', 'value' => 1])
        ->assertRedirect(route('admin.login'));
    $this->post(route('admin.stats.store'), ['label' => 'Hacked', 'value' => 1])
        ->assertRedirect(route('admin.login'));
    $this->delete(route('admin.stats.destroy', $stat))
        ->assertRedirect(route('admin.login'));

    expect($stat->refresh()->label)->not->toBe('Hacked')
        ->and(Stat::count())->toBe(4);
});

test('home page renders figures from the database', function () {
    Stat::where('label', 'Project Completed')->update(['value' => 275, 'suffix' => '+']);

    $this->get('/')
        ->assertOk()
        ->assertSee('data-target="275" data-suffix="+">0+', escape: false)
        ->assertSee('data-target="90" data-suffix="K$">0K$', escape: false)
        ->assertSee('Ad Spend');
});

test('whole numbers are rendered without a trailing .0', function () {
    Stat::query()->update(['value' => 12.0]);

    $this->get('/')->assertSee('data-target="12"', escape: false)->assertDontSee('data-target="12.0"', escape: false);
});

test('home page hides the section when there are no figures', function () {
    Stat::query()->delete();

    $this->get('/')
        ->assertOk()
        ->assertDontSee('My Completed Projects')
        ->assertSee('My Creative Works');
});
