<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UsuarioController;
use App\Models\Paciente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/procesar', function () {
    return view('procesar');
});
Route::get('hola', function () {
    return ('Hola esta es una prueba de saludo');
});
//guardar datos
Route::post('/pacientes', [PacienteController::class, 'guardar'])
    ->name('pacientes.guardar');

Route::get('/login', function () {
    return view('login');
});
Route::get('/cantidad-pacientes', function () {
    $cantidadPacientes = Paciente::count();
    return view('cantidad-pacientes', compact('cantidadPacientes'));
});
//redireccionar usuario o paciente
Route::get('/usuario', function () {
    return view('usuario');
});
Route::get('/paciente', function () {
    return view('paciente');
});
//validar con la clase
Route::post('/validar-usuario', 
[UsuarioController::class, 'validarUsuario']);
//visualizar una vez logueado
Route::get('/visualizar-usuario', function () {
    if (!session()->has('usuario_id')) {
        return redirect('/usuario');
    }

    return app(PacienteController::class)->mostrarPacientes();
});
Route::get('/visualizar-paciente', function () {
    if (!session()->has('paciente_id')) {
        return redirect('/usuario');
    }
    return view('visualizar-paciente');
});
//cerrar sesion
Route::post('/cerrar-sesion', [UsuarioController::class, 'cerrarSesion']);