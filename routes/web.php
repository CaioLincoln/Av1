<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\CarroController;
// use App\Http\Controllers\EmpresaController;
// use App\Http\Controllers\FuncionarioController;
// use App\Http\Controllers\ContratoController;
// use App\Http\Controllers\ReceitaController;

Route::get(     '/carro',           [CarroController::class,            'index']);
Route::post(    '/carro',           [CarroController::class,            'store']);
Route::get(     '/carroEdit/{id}',  [CarroController::class,            'edit']);
Route::put(     '/carroUpdate/{id}',     [CarroController::class,       'update']);
Route::delete(  '/carro/{id}',      [CarroController::class,            'destroy']);

// Route::post(    '/carro',           [CarroController::class,            'store'])->Middleware('auth');
// Route::put(     '/carro/{id}',      [CarroController::class,            'edit'])->Middleware('auth');
// Route::delete(  '/carro/{id}',      [CarroController::class,            'destroy'])->Middleware('auth');

// Route::get(     '/empresa',        [EmpresaController::class,     'index']);
// Route::post(    '/empresa',        [EmpresaController::class,     'store']);
// Route::delete(  '/empresa/{id}',   [EmpresaController::class,     'destroy']);

// Route::get(     '/funcionario',        [FuncionarioController::class,     'index']);
// Route::post(    '/funcionario',        [FuncionarioController::class,     'store']);
// Route::delete(  '/funcionario/{id}',   [FuncionarioController::class,     'destroy']);

// Route::get(     '/contrato',        [ContratoController::class,     'index']);
// Route::post(    '/contrato',        [ContratoController::class,     'store']);
// Route::delete(  '/contrato/{id}',   [ContratoController::class,     'destroy']);

// Route::get(     '/financeiro',      [ReceitaController::class,     'index']);


Route::get('/', function () {
    return view('welcome');
});
