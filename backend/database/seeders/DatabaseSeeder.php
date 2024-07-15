<?php

namespace Database\Seeders;

use App\Models\Consultorio;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Persona;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Persona::factory()->count(50)->create();
        Consultorio::factory()->count(5)->create();
        Medico::factory()->count(10)->create();
        Paciente::factory()->count(25)->create();

    }
}