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
            'title' => $this->faker->sentence(3), // Use sentence to generate a title
            'author' => $this->faker->name, // Use name for the author
            'isbn' => $this->faker->unique()->isbn13, // Use isbn13 for a valid ISBN
            'stock' => $this->faker->numberBetween(0, 100), // Generate a random stock value
            'price' => $this->faker->randomFloat(2, 5, 100), // Generate a random price between 5 and 100

        ];
    }
}
