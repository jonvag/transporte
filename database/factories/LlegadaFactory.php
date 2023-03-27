<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Llegada>
 */
class LlegadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(["Chacaito", "El Lido" , "Traki", "Metro Chacao", "CCCT"]),
            'region' => $this->faker->randomElement(["Chacao", "chacaito", "La mercedes"]),
            'user_id' => $this->faker->randomElement([1, 2 ])


        ];
    }
}
