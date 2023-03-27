<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Week::create([
            'name' => 'Semana1'
        ])/* ->assignRole('Admin') */;

        Week::create([
            'name' => 'Semana 2'
        ])/* ->assignRole('Blogger') */;
        Week::create([
            'name' => 'Semana 3'
        ])/* ->assignRole('Blogger') */;
        Week::create([
            'name' => 'Semana 4'
        ])/* ->assignRole('Blogger') */;
        Week::create([
            'name' => 'Semana 5'
        ])/* ->assignRole('Blogger') */;
        Week::create([
            'name' => 'Semana 6'
        ])/* ->assignRole('Blogger') */;
    }
}
