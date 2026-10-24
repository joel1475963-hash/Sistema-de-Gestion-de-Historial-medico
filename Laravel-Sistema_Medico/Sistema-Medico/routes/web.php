<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
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

Route::post('/pacientes', [PacienteController::class, 'guardar'])
    ->name('pacientes.guardar');