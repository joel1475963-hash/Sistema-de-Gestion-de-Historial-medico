<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UsuarioController;
use App\Models\Paciente;
use App\Models\Torta;
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

//proyecto integradora rutas para no confundirme
Route::get('/tortas', function () {
    $tortas = Torta::all();
    return view('tortas.index', compact('tortas'));
});

Route::get('/tortas/nuevo', function () {
    return view('tortas.create');
});

Route::post('/tortas/nuevo', function () {
    //se preguntara que hago aqui lo hice asi para hacerlo rapido y valida los campos sabor y precio
    request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
    ]);

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/tortas');
});