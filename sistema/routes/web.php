<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ReceitaController;

Route::get('/', [ReceitaController::class, 'index']);
Route::get('/receitas/create', [ReceitaController::class, 'create'])->middleware('auth');
Route::get('/receitas/{id}', [ReceitaController::class, 'show']);
Route::post('/receitas', [ReceitaController::class, 'store']);
Route::delete('/receitas/{id}', [ReceitaController::class, 'destroy'])->middleware('auth');
Route::get('/receitas/edit/{id}', [ReceitaController::class, 'edit'])->middleware('auth');
Route::put('/receitas/update/{id}', [ReceitaController::class, 'update'])->middleware('auth');

Route::get('/dashboard', [ReceitaController::class, 'dashboard'])->middleware('auth');


