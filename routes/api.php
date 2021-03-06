<?php

use Illuminate\Http\Request;

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

Route::middleware('api')->post('/agregar','AlumnoController@agregarAlumno');
Route::middleware('api')->get('/apiJson','AlumnoController@DevolverTodosJson');
Route::middleware('api')->delete('/eliminarAlumno/{id}','AlumnoController@EliminarAlumno');