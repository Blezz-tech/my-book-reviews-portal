<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(5),
            "description" => fake()->paragraph(5),
            "status" => fake()->numberBetween(-1, 1),
            "published_at" => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
