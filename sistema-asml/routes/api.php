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


Route::get('getComunas', 'Compra\ProveedorController@getComunas');

Route::get('getJefatura', 'Compra\UserController@getJefatura');

//Route::get('proveedor/{proveedor}', 'Compra\ProveedorController@getProveedorPorRut');

Route::resource("/proveedor","Compra\ProveedorController");