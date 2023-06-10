<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word();

        return [
            'image' => $this->faker->imageUrl(35, 35, 'brand', true),
            'name' => ucfirst($name),
            'slug' => str_replace(' ', '-', strtolower($name)),
            'link' => $this->faker->url()
        ];
    }
}
