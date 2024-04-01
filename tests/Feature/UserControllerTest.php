<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserControllerTest extends TestCase
{
    use RefreshDatabase,WithoutMiddleware;

    /** @test */
    public function it_can_get_all_users()
    {
        // Arrange
        User::factory()->count(3)->create();

        // Act
        $response = $this->getJson('/api/getusers');

        // Assert
        $response->assertOk();
        $response->assertJsonCount(3);
    }

    /** @test */
    public function it_can_get_user_profile()
    {
        // Arrange
        $user = User::factory()->create();

        // Act
        $response = $this->actingAs($user)->getJson('/api/getProfile');

        // Assert
        $response->assertOk();
        $response->assertJson($user->only(['Firstname', 'Lastname', 'Email', 'Username', 'City', 'State', 'Zip', 'MobileNumber']));
    }

    /** @test */
    /** @test */
public function it_can_update_user_profile()
{
    // Arrange
    $user = User::factory()->create();
    $data = ['firstname' => 'Updated Name'];

    // Act
    $response = $this->actingAs($user)->post('/api/updateProfile', $data);

    // Assert
    $response->assertOk();
    $this->assertDatabaseHas('users', [
        'UserID' => $user->UserID,
        'firstname' => 'Updated Name'
    ]);
}


    // Add more tests for other methods...
}
