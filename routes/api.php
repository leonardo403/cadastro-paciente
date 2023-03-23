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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('api')->group(function () {
    Route::get('pacientes', 'ApiController@getAllPacientes');
    Route::get('pacientes/{id}', 'ApiController@getPaciente');
    Route::post('pacientes', 'ApiController@createPaciente');
    Route::put('pacientes/{id}', 'ApiController@updatePaciente');
    Route::delete('pacientes/{id}', 'ApiController@deletePaciente');
});
