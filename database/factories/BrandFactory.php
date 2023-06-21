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
            'image' => 'assets/brand_image.png',
            'name' => ucfirst($name),
            'slug' => str_replace(' ', '-', strtolower($name)),
            'link' => $this->faker->url()
        ];
    }
}
