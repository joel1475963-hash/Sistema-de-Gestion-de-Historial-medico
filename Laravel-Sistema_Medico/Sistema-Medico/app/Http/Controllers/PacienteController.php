<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function guardar(Request $request)
    {
        if (Paciente::count() < 10) {

            $request->validate([
                'ci' => 'required',
                'nombre' => 'required',
                'comentario' => 'required'
            ]);
        
            $paciente = Paciente::create([
                'ciPaciente' => $request->ci,
                'nombre' => $request->nombre,
                'comentario' => $request->comentario
            ]);
        
            $cantidadPacientes = Paciente::count();

            return view('procesar', compact('paciente', 'cantidadPacientes'))
            ->with('succeful', 'Registro exitoso');
        }
        else if(Paciente::count() >= 10) {
            return redirect('/inicio')
                ->with('error', 'Ya se alcanzo el limite de 10 pacientes error al registrar.');
        }
    }
    public function mostrarPacientes()
    {
        $pacientes = Paciente::select('nombre', 'comentario')->get();

        return view('visualizar-usuario', compact('pacientes'));
    }
    public function iniciarsesionPaciente(Request $request)
    {
        $request->validate([
            'ci' => 'required'
        ]);

        $ci = $request->get('ci');

        $paciente = Paciente::where('ciPaciente', $ci)->first();

        if ($paciente) {
            $request->session()->regenerate();

            session([
                'paciente_id' => $paciente->idPaciente,
                'nombrePaciente' => $paciente->nombre
            ]);

            return redirect('/visualizar-paciente');
        } else {
            return redirect('/login-paciente')->with(
                'mensaje',
                'CI no registrado'
            );
        }
    }
}
