<?php

namespace Database\Factories;

use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'code' =>$this->faker->numberBetween(1000,40000),
            'name' =>$this->faker->word(),
            'time_zone' =>$this->faker->timezone(),
            'description' =>$this->faker->sentence(4),
        ];
    }
}
