<?php

namespace Database\Factories;

use App\Models\StatisticData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StatisticData>
 */
class StatisticDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = StatisticData::class;
    public function definition()
    {
        return [
            //
            'location_id' =>$this->faker->numberBetween(1,250),
            'channel_id' =>$this->faker->numberBetween(1,180),
            'device_id' =>$this->faker->numberBetween(1,350),
            'statistic_id' =>$this->faker->numberBetween(1,150000)
        ];
    }
}
