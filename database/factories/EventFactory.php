<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => fake()->sentence,
            'Description' => fake()->paragraph,
            'Category' => fake()->randomElement(['Conference', 'Seminar', 'Workshop', 'Concert']),
            'Location' => fake()->address,
            'StartDateTime' => fake()->dateTimeBetween('+1 week', '+1 month'),
            'EndDateTime' => fake()->dateTimeBetween('+2 weeks', '+2 months'),
            'MaxAttendees' => fake()->numberBetween(50, 200),
            'CurrentAttendees' => 0, // Default to 0
            'Image' => fake()->imageUrl(),
            'RegistrationDeadline' => fake()->dateTimeBetween('-1 month', '+1 week'),
            'RegistrationFee' => fake()->randomFloat(2, 10, 1000),
            'Featured' => fake()->boolean(30), // 30% chance of being featured
            'Status' => fake()->randomElement(['draft', 'published', 'canceled']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
