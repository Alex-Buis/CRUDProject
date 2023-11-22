<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListeFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'synopsis'=> fake()->text(),
            'duration'=> fake()->numberBetween(100,200),
            'cover'=> fake()->imageUrl(),
            'released_at' => fake()->dateTimeBetween('-50 years','+10 years'),
        ];
    }
}