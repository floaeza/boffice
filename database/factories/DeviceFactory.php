<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Device::class;
    public function definition()
    {
        return [
            //
            'mac_address' =>$this->faker->unique()->numerify('##-##-##-##-##-##'), 
            'ip_direction' =>$this->faker->unique()->numerify('############'), 
            'make' =>$this->faker->randomElement(['Infomir', 'Amino', 'Kamai', 'LG', 'Samsung']),
            'model' =>$this->faker->randomElement(['A50', 'A540', 'A140', '7XM', 'MAG420', 'MAG524']),
            'software_version' =>$this->faker->randomElement(['Opera', 'Safari']),
        ];
    }
}
