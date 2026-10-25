<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function guardar(Request $request)
    {
        if (Paciente::count() >= 10) {
            return redirect('/cantidad-pacientes')
                ->with('error', 'Ya se alcanzo el limite de 10 pacientes error al registrar.');
        }
    
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
    
        $cantidadPacientes = Paciente::count();
    
        return view('procesar', compact('paciente', 'cantidadPacientes'));
    }
}
