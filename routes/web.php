<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConvenioController;

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

Route::get('/', HomeController::class);

Route::get('convenios', [ConvenioController::class, 'index'])->name('convenios.index');
   
Route::get('convenios/nuevo', [ConvenioController::class, 'create'])->name('convenios.create');

Route::post('convenios', [ConvenioController::class, 'store'])->name('convenios.store');

Route::get('convenios/{id}', [ConvenioController::class, 'show'])->name('convenios.show');

Route::get('convenios/{id}/edit', [ConvenioController::class, 'edit'])->name('convenios.edit');

Route::put('convenios/{id}', [ConvenioController::class, 'update'])->name('convenios.update');

Route::delete('convenios/{id}', [ConvenioController::class, 'destroy'])->name('convenios.destroy');




 