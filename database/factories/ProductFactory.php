<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(2);
        
        return [
            'title' => $title,
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(1, 100) * 1000,
            'slug' => Str::slug($title),
        ];
    }
}
