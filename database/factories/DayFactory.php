<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\Ruta;
use App\Models\Week;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Day>
 */
class DayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'passenger_id' => Passenger::all()->random()->id,
            'ruta_id' => Ruta::all()->random()->id,
            'dom' => $this->faker->randomElement([2 ]),
            'lun' => $this->faker->randomElement([1, 2 ]),
            'mar' => $this->faker->randomElement([1, 2 ]),
            'mie' => $this->faker->randomElement([1, 2 ]),
            'jue' => $this->faker->randomElement([1, 2 ]),
            'vie' => $this->faker->randomElement([1, 2 ]),
            'sab' => $this->faker->randomElement([ 2 ]),
            'semana_id' => Week::all()->random()->id
        ];
    }
}
