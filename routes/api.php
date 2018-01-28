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

//con la tabla usuarios y la tabla repartos

Route::get('usuarios', 'ApiController@usuarios');

Route::get('tabla/{id}', 'ApiController@usuarioEspecifico');

Route::get('repartos/{id}', 'ApiController@repartos');