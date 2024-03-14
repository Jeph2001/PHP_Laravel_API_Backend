<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/pizza', 'App\Http\Controllers\PizzaController@index')->middleware('auth');
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@onerecord')->middleware('auth');
Route::get('/create', 'App\Http\Controllers\PizzaController@create');
Route::get('/', 'App\Http\Controllers\PizzaController@welcome');
Route::post('/pizza', 'App\Http\Controllers\PizzaController@store');
Route::delete('/pizza/{id}', 'App\Http\Controllers\PizzaController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
