<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('libros', LibroController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('autors', AutorController::class);
Route::resource('resenas', ResenaController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
