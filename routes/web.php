<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yieldChangesController;

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

/*LA ESTRUCTURA GENERAL DE LAS PETICIONES ES: Router::<metodo>(<url>, <[clase, funcion]>) // OPCIONAL: -> name('para asegurar el nombre del metodo poner el mismo')*/
Route::get('index',  [yieldChangesController::class, 'index'])->name('register');