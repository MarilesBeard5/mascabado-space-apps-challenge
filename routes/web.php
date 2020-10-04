<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yieldChangesController;
use App\Http\Controllers\ycCanadaWheatController;
use App\Http\Controllers\ycCanadaRiceController;
use App\Http\Controllers\ycCanadaCornController;
use App\Http\Controllers\ycMexicoCornController;
use App\Http\Controllers\ycMexicoRiceController;
use App\Http\Controllers\ycUSACornController;
use App\Http\Controllers\ycUSARiceController;
use App\Http\Controllers\ycUSAWheatController;

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
Route::get('index',  [yieldChangesController::class, 'index'])->name('index');
Route::get('mexicoCorn',  [ycMexicoCornController::class, 'index'])->name('index');
Route::get('mexicoRice',  [ycMexicoRiceController::class, 'index'])->name('index');
Route::get('canadaCorn',  [ycCanadaCornController::class, 'index'])->name('index');
Route::get('canadaRice',  [ycCanadaRiceController::class, 'index'])->name('index');
Route::get('canadaWheat',  [ycCanadaWheatController::class, 'index'])->name('index');
Route::get('usaCorn',  [ycUSACornController::class, 'index'])->name('index');
Route::get('usaRice',  [ycUSARiceController::class, 'index'])->name('index');
Route::get('usaWheat',  [ycUSAWheatController::class, 'index'])->name('index');
