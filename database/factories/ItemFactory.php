<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 10000, 100000),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement(
                [
                'https://images.unsplash.com/photo-1591325418441-ff678baf78ef',
                'https://plus.unsplash.com/premium_photo-1668143358351-b20146dbcc02',
                'https://images.unsplash.com/photo-1742633882704-41ec3a57dbb7'
                ]
        ),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
