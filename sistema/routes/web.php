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
Route::get('/receitas/create', [ReceitaController::class, 'create']);
Route::get('/receitas/{id}', [ReceitaController::class, 'show']);
Route::post('/receitas', [ReceitaController::class, 'store']);
