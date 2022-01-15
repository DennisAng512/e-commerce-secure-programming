<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(3,5),
            'tag_id' => $this->faker->numberBetween(1,3),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->paragraph(),
            'author' => $this->faker->unique()->name(),
            'price' => $this->faker->randomNumber(6, true),
        ];
    }
}
