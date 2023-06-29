<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $generate = $this->faker->unique()->sentence(12);

        return [
            'image' => 'assets/product_image-22-06-2023-11-37.svg',
            'title' => ucwords($generate),
            'slug' => str_replace(' ', '-', strtolower($generate)),
            'price' => $this->faker->numberBetween(99000, 45000000),
            'description' => $this->faker->paragraphs(3, true),
            'spesification' => implode(', ', $this->faker->sentences(mt_rand(12, 25))),
            'tags' => implode(', ', $this->faker->words(mt_rand(8, 12))),
            'link' => $this->faker->url(),
            'promo' => mt_rand(0, 25),
            'promo_duration' => $this->faker->date('2023-m-d') . ' ' . $this->faker->time(),
            'category_id' => mt_rand(1, 8),
            'brand_id' => mt_rand(1, 20),
            'user_id' => mt_rand(1, 12)
        ];
    }
}
