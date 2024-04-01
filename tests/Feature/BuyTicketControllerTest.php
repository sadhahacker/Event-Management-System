<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class BuyTicketControllerTest extends TestCase
{
    use RefreshDatabase,WithoutMiddleware;

    /** @test */
    public function user_can_buy_ticket_with_valid_data()
    {
        // Arrange
        $user = User::factory()->create();
        $event = Event::factory()->create(); // Assuming you have an Event factory
        $data = [
            'eventId' => $event->EventID,
            'quantity' => 1,
        ];

        // Act
        $response = $this->actingAs($user)->post('/api/buyTicket', $data);

        // Assert
        $response->assertStatus(201);
        $response->assertJson([
            'success' => true,
            'message' => 'Ticket Bought.',
        ]);
        $this->assertDatabaseHas('attendees', [
            'UserID' => $user->UserID,
            'EventID' => $event->EventID,
            'Quantity' => 1,
        ]);
    }
}
