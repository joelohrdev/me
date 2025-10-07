<?php

declare(strict_types=1);

use App\Models\User;

test('registration screen can be rendered when no users exist', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('registration screen redirects to login when users exist', function () {
    User::factory()->create();

    $response = $this->get('/register');

    $response->assertRedirect(route('login'));
});

test('new users cannot register when a user already exists', function () {
    User::factory()->create();

    $response = $this->get('/register');

    $response->assertRedirect(route('login'));
});
