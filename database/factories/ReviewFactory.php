<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->sentence(6),
            'rating' => fake()->numberBetween(1, 5),
            "status" => fake()->numberBetween(-1, 1),
            "published_at" => fake()->dateTimeBetween('-2 years', 'now'),
            'user_id' => User::factory()->create(),
            'book_id' => Book::factory()->create(),
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'updated_at' => fake()->dateTimeBetween('created_at', 'now'),
        ];
    }
}
