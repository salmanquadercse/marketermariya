<?php

use App\Models\User;

test('guests are redirected to the admin login', function () {
    $this->get(route('admin.works.index'))
        ->assertRedirect(route('admin.login'));
});

test('login page renders', function () {
    $this->get(route('admin.login'))
        ->assertOk()
        ->assertSee('Admin login');
});

test('admin can log in with valid credentials', function () {
    $user = User::factory()->create(['password' => 'correct-horse']);

    $this->post(route('admin.login'), ['email' => $user->email, 'password' => 'correct-horse'])
        ->assertRedirect(route('admin.works.index'));

    $this->assertAuthenticatedAs($user);
});

test('login fails with wrong password', function () {
    $user = User::factory()->create(['password' => 'correct-horse']);

    $this->from(route('admin.login'))
        ->post(route('admin.login'), ['email' => $user->email, 'password' => 'nope'])
        ->assertRedirect(route('admin.login'))
        ->assertSessionHasErrors('email');

    $this->assertGuest();
});

test('signed-in admin is sent from the login page to the panel', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('admin.login'))
        ->assertRedirect(route('admin.works.index'));
});

test('admin can log out', function () {
    $this->actingAs(User::factory()->create())
        ->post(route('admin.logout'))
        ->assertRedirect(route('admin.login'));

    $this->assertGuest();
});
