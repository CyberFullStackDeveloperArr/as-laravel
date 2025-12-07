<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category; // Post Category

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author_id' => User::factory(),
            'category_id' => Category::factory(), // Post Category
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
