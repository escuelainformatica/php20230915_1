<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;
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

Route::get('/',[LibroController::class,'listar']);
Route::get('/listar2',[LibroController::class,'listar2']);
Route::get('/categorias',[CategoriaController::class,'listar']);
