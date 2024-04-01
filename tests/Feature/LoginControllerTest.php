<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\User;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase,WithoutMiddleware; // Use this trait if you want to disable middleware for the test

    public function test_login_success()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'UserType' => 'admin',
        ]);

        // Attempt to login
        $response = $this->post('api/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Assert the login was successful
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'redirect' => url("dashboard"),
            'message' => 'Login successful',
        ]);
    }
    public function test_login_failure()
    {
        // Attempt to login with invalid credentials
        $response = $this->post('api/login', [
            'email' => 'wrong@example.com',
            'password' => 'wrongpassword',
        ]);

        // Assert the login failed
        $response->assertStatus(422);
    }
    public function test_logout()
    {
        // Create a user and log them in
        $user = User::factory()->create();
        $this->actingAs($user);

        // Attempt to logout
        $response = $this->post('api/logout');

        // Assert the user was logged out
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'User is logged out successfully',
            'redirect' => url("login"),
        ]);
    }
}
