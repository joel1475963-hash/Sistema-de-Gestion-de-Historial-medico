<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function guardar(Request $request)
    {
        $request->validate([
            'ci' => 'required',
            'nombre' => 'required',
            'comentario' => 'required'
        ]);

        $paciente = Paciente::create([
            'ci' => $request->ci,
            'nombre' => $request->nombre,
            'comentario' => $request->comentario
        ]);

        return view('procesar', compact('paciente'));
    }
}
