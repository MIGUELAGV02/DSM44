<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LibroUController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->middleware('auth')
    ->name('home');



Route::get('libros', [LibroController::class, 'index'])->name('libros.index');

Route::get('libros/create', [LibroController::class, 'create' ])->name('libros.create');

Route::get('libros/{mostrar}', [LibroController::class, 'show'] )->name('libros.show');

Route::get('libros/{ver}/pdf', [LibroController::class, 'pdf'])->name('libros.pdf');

Route::post('libros', [LibroController::class, 'store' ])->name('libros.store');

Route::get('libros/{editar}/edit', [LibroController::class, 'edit' ])->name('libros.edit');

Route::put('libros/{editar}', [LibroController::class, 'update' ])->name('libros.update');

Route::delete('libros/{eliminar}', [LibroController::class, 'destroy' ])->name('libros.destroy');

Route::view('nosotros','nosotros')->name('nosotros');  //URL---Vista

//--------------Usuario vista -----------------


Route::get('librosUsuario', [LibroUController::class, 'index'])->name('librosUsuario.index');


//--------------Login----------------------

Route::get('/register', [RegisterController ::class, 'create'])->name('register.index');

Route::post('/register', [RegisterController ::class, 'store'])->name('register.store');

Route::get('/login', [SessionsController ::class, 'create'])->name('login.index');

Route::post('/login', [SessionsController ::class, 'store'])->name('login.store');

//--------------Login admin

Route::post('/admin', [AdminController::class, 'index' ])
    ->middleware('auth.admin')
    ->name('admin.index');

    //-------------------PDF


