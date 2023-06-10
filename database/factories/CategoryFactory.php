<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words(mt_rand(1, 3), true);

        return [
            'name' => ucfirst($name),
            'slug' => str_replace(' ', '-', strtolower($name))
        ];
    }
}
