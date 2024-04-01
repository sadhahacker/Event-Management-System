<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CategoryName' => fake()->word,
        'CategoryDescription' => fake()->sentence,
        'CategoryImage' => fake()->imageUrl(),
        'CategoryStatus' => fake()->randomElement(['active', 'inactive']),
        'created_at' => now(),
        'updated_at' => now(),
        ];
    }
}
