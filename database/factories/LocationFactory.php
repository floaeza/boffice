<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Location;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Location::class;
    public function definition()
    {
        return [
            //
            'name' =>$this->faker->word(),
            'description' =>$this->faker->sentence(5),
            'package_id' =>$this->faker->numberBetween(1,5),
        ];
    }
}
