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
Route::post("clase/controller", "App\Http\Controllers\CursoController@store")->name("guardar");
Route::put("clase/controller/{id}", "App\Http\Controllers\CursoController@update")->name("actualizar");
Route::delete("clase/controller/{id}", "App\Http\Controllers\CursoController@delete")->name("eliminar");



Route::get("clase/controller/show", "App\Http\Controllers\CursoController@show");
Route::get("clase/controller/edit", "App\Http\Controllers\CursoController@edit");