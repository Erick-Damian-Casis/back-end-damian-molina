<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_long_travel'=>$this->faker->longitude($min = -180, $max = 180),
            'start_lat_travel'=>$this->faker->latitude($min = -90, $max = 90),
            'end_long_travel'=>$this->faker->longitude($min = -180, $max = 180),
            'end_lat_travel'=>$this->faker->longitude($min = -180, $max = 180),
        ];
    }
}
