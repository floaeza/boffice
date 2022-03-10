<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ChannelData;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ChanneldataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ChannelData::class;
    public function definition()
    {
        return [
            //
            'quality' =>$this->faker->randomElement(['HD','SD']), 
            'multicast' =>$this->faker->unique()->numerify('igmp://###.##.#.#'), 
            'number' =>$this->faker->numberBetween(1,100),
            'port' =>$this->faker->numberBetween(1000,3000),
            'link' =>$this->faker->url(),
            'program' =>$this->faker->numberBetween(1,200),
            'position' =>$this->faker->numberBetween(0,20),
            'audio' =>$this->faker->numberBetween(1,1000),
        ];
    }
}
