<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pacientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'ciPaciente' => '1234567',
                'nombre' => 'Juan Perez Lopez',
                'comentario' => 'Tengo dolor de cabeza y estoy resfriado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ciPaciente' => '2345678',
                'nombre' => 'Maria Lopez Garcia',
                'comentario' => 'Me siento cansada, creo que estoy mal y no se que es.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ciPaciente' => '3456789',
                'nombre' => 'Carlos Rojas Mendoza',
                'comentario' => 'Tengo tos y congestion nasal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ciPaciente' => '4567890',
                'nombre' => 'Ana Flores Quispe',
                'comentario' => 'Quiero hacer una revision de mi salud.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ciPaciente' => '5678901',
                'nombre' => 'Luis Vargas Mamani',
                'comentario' => 'Tengo dolor muscular leve.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
