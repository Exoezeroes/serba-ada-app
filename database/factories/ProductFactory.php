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
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'category_id' => fake()->numberBetween(1, 4),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(1, 100) * 1000,
            'slug' => $slug,
            'img_path' => 'https://picsum.photos/seed/' . $slug . '/400'
        ];
    }
}
