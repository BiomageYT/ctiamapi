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

Route::apiResource('tiendas', 'TiendaController');

Route::prefix('tiendas')->group(function () {
    Route::get('/', 'TiendaController@index');
});

Route::apiResource('productos', 'ProductoController');

Route::prefix('productos')->group(function () {
    Route::get('/', 'ProductoController@index');
});