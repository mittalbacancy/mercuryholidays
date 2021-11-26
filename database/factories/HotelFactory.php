<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $items = ['Own','HotelBeds','SunHotels'];
        return [
            'user_id' => rand(1,5),
            'name' => $this->faker->company(),
            'ratings' => rand(1,5),
            'address' => $this->faker->address(),
            'supplier' => $items[array_rand($items)],
            'active' => true
        ];
    }
}
