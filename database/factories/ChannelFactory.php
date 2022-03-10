<?php

namespace Database\Factories;

use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Channel>
 */
class ChannelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Channel::class;
    public function definition()
    {
        return [
            //
            'name' =>$this->faker->word(),
            'abbreviation' =>$this->faker->word(),
            'description' =>$this->faker->sentence(6),
            'station_id' =>$this->faker->numberBetween(1,180),
            'channel_data_id' =>$this->faker->unique()->numberBetween(1,180),
        ];
    }
}
