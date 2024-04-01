<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_user_registration()
    {
        $userData = [
            'username' => $this->faker->userName,
            'email' => $this->faker->safeEmail,
            'password' => 'password', // plaintext for testing
            'mobilenumber' => $this->faker->numerify('#########')
        ];

        $response = $this->json('POST', 'api/register', $userData);

        $response->assertStatus(201)
                 ->assertJson([
                     'status' => 'success',
                     'message' => 'User registered successfully',
                 ]);

        $this->assertDatabaseHas('users', [
            'email' => $userData['email']
        ]);
    }
}
