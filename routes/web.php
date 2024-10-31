<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class )->name('home');

Route::get('libros', [LibroController::class, 'index'])->name('libros.index');

Route::get('libros/create', [LibroController::class, 'create' ])->name('libros.create');

Route::get('libros/{mostrar}', [LibroController::class, 'show'] )->name('libros.show');

Route::post('libros', [LibroController::class, 'store' ])->name('libros.store');

Route::get('libros/{editar}/edit', [LibroController::class, 'edit' ])->name('libros.edit');

Route::put('libros/{editar}', [LibroController::class, 'update' ])->name('libros.update');

Route::delete('libros/{eliminar}', [LibroController::class, 'destroy' ])->name('libros.destroy');

Route::view('nosotros','nosotros')->name('nosotros');  //URL---Vista