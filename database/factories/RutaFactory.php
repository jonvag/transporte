<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruta>
 */
class RutaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'desde' => $this->faker->randomElement(['Caricuao']),
            'hasta' => $this->faker->randomElement(['Chacaito' ]),
            'hora' => $this->faker->randomElement(['6:00am', '6:30am', '7:00am', '6:45am' ]),
            'status' => $this->faker->randomElement([1, 2 ])
        ];
    }
}
