<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jon Admin',
            'email' => 'jon.apiscope@gmail.com',
            'password' => bcrypt('12345678')
        ])/* ->assignRole('Admin') */;

        User::create([
            'name' => '2Jon Usuario',
            'email' => '2jon.apiscope@gmail.com',
            'password' => bcrypt('12345678')
        ])/* ->assignRole('Blogger') */;
        User::factory(8)->create();
    }
}
