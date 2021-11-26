<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1,5),
            'hotel_id'    => rand(1,5),
            'title'       => $this->faker->name(),
            'description' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true) ,
            'author'     => $this->faker->name()            
        ];
    }
}
