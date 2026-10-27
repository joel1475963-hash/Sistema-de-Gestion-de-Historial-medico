<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    public function validarUsuario(Request $request)
    {
        $request->validate([
            'nombreUsu' => 'required',
            'contrasena' => 'required'
        ]);

        $nombreUsu = $request->get('nombreUsu');
        $contrasena = $request->get('contrasena');

        $usuario = Usuario::where('nombreUsu', $nombreUsu)->first();

        if ($usuario && Hash::check($contrasena, $usuario->contrasena)) {
            $request->session()->regenerate();
            session(['usuario_id' => $usuario->idUsuario,'nombreUsu' => $usuario->nombreUsu]);
            
            return redirect('/visualizar-usuario');
        } else {
            return redirect('/usuario')->with('mensaje', 'Usuario o contraseña incorrectos');
        }
    }
    public function cerrarSesion(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
