<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name . ' vs ' . fake()->name,
            'score' => fake()->numberBetween(0, 4) . ' - ' . fake()->numberBetween(0, 4),
            'stadia_id' => fake()->numberBetween(1, 10),
            'match_date' => fake()->optional()->dateTime,
        ];
    }
}
