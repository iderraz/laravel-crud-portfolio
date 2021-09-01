<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HomeController;
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



Route::get('/',[HomeController::class,"index"])->name('home');
Route::get('/back',[BackOfficeController::class,"index"])->name('Back');


//About Routes//
Route::get('/about-back',[AboutController::class,"index"]);
Route::get('/aboutEdit/{id}',[AboutController::class,"edit"])->name('aboutEdit');
Route::put('/aboutUpdate/{id}',[AboutController::class,"update"])->name('aboutUpdate');
//About Routes//


//Facts Routes//
Route::get('/facts-back',[FactController::class,"index"]);
Route::get('/factEdit/{id}',[FactController::class,"edit"])->name('factEdit');
Route::put('/factUpdate/{id}',[FactController::class,"update"])->name('factUpdate');
//Facts Routes//



