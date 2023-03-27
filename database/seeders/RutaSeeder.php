<?php

namespace Database\Seeders;

use App\Models\Ruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruta::create([
            'desde' => 'Caricuao',
            'hasta' => 'Chacaito',
            'hora' => '6:00am'
        ])/* ->assignRole('Admin') */;

        Ruta::create([
            'desde' => 'Caricuao',
            'hasta' => 'Chacaito',
            'hora' => '6:30am'
        ])/* ->assignRole('Admin') */;
        Ruta::create([
            'desde' => 'Caricuao',
            'hasta' => 'Chacaito',
            'hora' => '7:00am'
        ])/* ->assignRole('Admin') */;
    }
}
