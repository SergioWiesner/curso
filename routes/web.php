<?php

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

Route::get("clase", function(){
    return view("curso");
});

Route::get("clase/controller/index", "App\Http\Controllers\CursoController@index");

Route::get("clase/controller/show", "App\Http\Controllers\CursoController@show");
Route::get("clase/controller/edit", "App\Http\Controllers\CursoController@edit");