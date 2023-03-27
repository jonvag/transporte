<?php

namespace Database\Factories;

use App\Models\Recogida;
use App\Models\Llegada;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passenger>
 */
class PassengerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstname,
            'apellido' => $this->faker->lastName,
            'cedula' => $this->faker->numberBetween(10522349, 32100200),
            'telefono' => $this->faker->biasedNumberBetween(1000000, 9999999),
            /* 'status' => $this->faker->randomElement([1, 2 ]), */
            'recogida_id' => Recogida::all()->random()->id,
            'llegada_id' => Llegada::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
