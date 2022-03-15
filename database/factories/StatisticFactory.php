<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Statistic;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statistic>
 */
class StatisticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Statistic::class;
    public function definition()
    {
        return [
            //
            'type' =>$this->faker->randomElement(['TV','TV']),
            'time' =>$this->faker->randomFloat(2,120,7200),
            'location_id' =>$this->faker->numberBetween(1,250),
            'channel_id' =>$this->faker->numberBetween(1,180),
            'device_id' =>$this->faker->numberBetween(1,350),
            'start' =>$this->faker->time(),
            'end'  =>$this->faker->time(),
        ];
    }
}
