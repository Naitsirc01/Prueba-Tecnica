<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesController;
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

Route::get('/fibonacci', [FuncionesController::class, 'get_fibonacci']);
Route::post('/fibonacci',[FuncionesController::class, 'calcular_fibonacci']);
Route::get('/invertir', [FuncionesController::class, 'get_invertir']);
Route::post('/invertir', [FuncionesController::class, 'invertir_texto']);
Route::get('/multiplicar', [FuncionesController::class, 'get_multiplicar']);
Route::post('/multiplicar', [FuncionesController::class, 'multiplicar']);
Route::get('/sum_array', [FuncionesController::class, 'get_sum_array']);
Route::post('/sum_array', [FuncionesController::class, 'sum_array']);

