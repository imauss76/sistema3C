<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MotorController;

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

Route::get('/motores1', function () {
    return view('teste');
});

/** Rotas para MOTORES */

Route::resource('/motor', MotorController::class);

Route::get('/motor/delete/{motor}', function (App\Motor $motor) {
    return view('motores.destroy', ['mtr' => $motor]);
})->name('motor.delete');

Route::get('/motor/edit/{motor}', function (App\Motor $motor) {
    return view('motores.edit', ['mtr' => $motor]);
})->name('motor.edit');

/** DEMAIS ROTAS */

Route::get('/home', function () {
    return view('inicio');
})->middleware(['auth'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
