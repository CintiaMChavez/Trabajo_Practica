<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tarea', 'App\Http\Controllers\TareaController@index'); //mostrar todos los registros
Route::post('/tarea', 'App\Http\Controllers\TareaController@store'); //crear un registro
Route::put('/tarea/{id}', 'App\Http\Controllers\TareaController@update'); //actualizar un registro
Route::delete('/tarea/{id}', 'App\Http\Controllers\TareaController@destroy'); //actualizar un registro
