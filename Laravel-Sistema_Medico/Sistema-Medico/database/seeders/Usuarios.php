<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'ciUsuario' => 12345678,
            'nombre' => 'Luis',
            'apellidoP' => 'Perez',
            'apellidoM' => 'Lopez',
            'nombreUsu' => 'luis555',
            'contrasena' => Hash::make('luisitocomunica12345'),
            'tipoUsu' => 'enfermero',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
