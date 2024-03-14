<?php

use App\Http\Controllers\MagicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API for GET method

Route::get('/getpizza', 'App\Http\Controllers\pizzaAPIcontroller@getPizza');
Route::post('/postpizza', 'App\Http\Controllers\pizzaAPIcontroller@postPizza');
Route::get('/getpizza/{id}','App\Http\Controllers\pizzaAPIcontroller@getonepizza');
Route::delete('/deletepizza/{id}', 'App\Http\Controllers\pizzaAPIcontroller@deletepizza');
Route::patch('/updatepizza/{id}', 'App\Http\Controllers\pizzaAPIcontroller@updatepizza');
Route::get('/searchpizza/{name}', 'App\Http\Controllers\pizzaAPIcontroller@searchpizza');

Route::apiResource("magic", 'App\Http\Controllers\MagicController');

Route::post('/uploadfile', 'App\Http\Controllers\pizzaAPIcontroller@uploadfile');
