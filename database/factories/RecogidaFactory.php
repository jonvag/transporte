<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recogida>
 */
class RecogidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(["UD3", "La Guardia" , "UD5", "Estacion Caricuao", "UD todos"]),
            'region' => $this->faker->randomElement(["Caricuao"]),
            'user_id' => $this->faker->randomElement([1, 2 ])
            /* 'user_id' => User::all()->random()->id */

        ];
    }
}
