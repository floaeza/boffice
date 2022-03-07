<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Package;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Package::class;
    public function definition()
    {
        return [
            'name' =>$this->faker->unique()->randomElement(['DEFAULT','VDM','CH','MVC','VPL']),
            'description' =>$this->faker->sentence(5),
        ];
    }
}
