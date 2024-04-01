<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendee>
 */
class AttendeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'UserID' => \App\Models\User::factory()->create()->UserID,
        'EventID' => \App\Models\Event::factory()->create()->EventID,
        'RegistrationDate' => fake()->dateTimeBetween('-1 month', 'now'),
        'AttendanceStatus' => fake()->randomElement(['registered', 'checked in', 'canceled']),
        'created_at' => now(),
        'updated_at' => now(),
        ];
    }
}
