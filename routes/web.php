<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TipoRolController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TipoDepartamentoController;
use App\Http\Controllers\TipoNumeracionController;
use App\Http\Controllers\TorreController;
use App\Http\Controllers\TipoDisponibilidadController;



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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class)->middleware('auth');
Route::resource('tipo_rol', TipoRolController::class)->middleware('auth');
Route::resource('departamento',DepartamentoController::class)->middleware('auth');
Route::resource('tipo_departamento',TipoDepartamentoController::class)->middleware('auth');
Route::resource('tipo_numeracion',TipoNumeracionController::class)->middleware('auth');
Route::resource('torre', TorreController::class)->middleware('auth');
Route::resource('tipo_disponibilidad',TipoDisponibilidadController::class)->middleware('auth');

