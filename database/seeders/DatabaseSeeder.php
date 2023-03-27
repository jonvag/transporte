<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bus;
use App\Models\Day;
use App\Models\Llegada;
use App\Models\Passenger;
use App\Models\Recogida;
use App\Models\Ruta;
use App\Models\Week;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(WeekSeeder::class);
        $this->call(RutaSeeder::class);
        /* $rutas = Ruta::factory(4)->create(); */
        Recogida::factory(8)->create();
        Llegada::factory(8)->create();
        Passenger::factory(8)->create();
        Bus::factory(8)->create();
        /* Day::factory(50)->create(); */


        /* foreach ($rutas as $ruta) {
            $ruta->buses()->attach(Bus::all()->random()->id);
        } */

        /* $this->call(PostSeeder::class); */
    }
}
