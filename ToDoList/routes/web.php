<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', 'App\Http\Controllers\TodoController@index');
Route::post('index/create', 'App\Http\Controllers\TodoController@add');
Route::post('index/delete/{id}', 'App\Http\Controllers\TodoController@remove');
Route::post('index/state/{id}', 'App\Http\Controllers\TodoController@state');
Route::post('index', 'App\Http\Controllers\TodoController@formSwitch');
