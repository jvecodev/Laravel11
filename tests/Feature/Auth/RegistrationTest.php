<?php

use App\Models\User;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    // Verifique se o usuário foi autenticado após o registro
    $this->assertAuthenticatedAs(User::where('email', 'test@example.com')->first());

    $response->assertRedirect(route('dashboard', absolute: false));
});

