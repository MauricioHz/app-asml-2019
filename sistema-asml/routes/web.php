<?php

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
Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'ModuloController@principal')->name('modulo');
Route::get('/modulo-compras', 'ModuloController@moduloCompra')->name('moduloCompra');
Route::get('/modulo-gestion-calidad', 'ModuloController@moduloGestion')->name('moduloGestion');
Route::get('/modulo-mantencion', 'ModuloController@moduloMantencion')->name('moduloMantencion');

/*
|--------------------------------------------------------------------------
| Compra
|--------------------------------------------------------------------------
*/
Route::get('/proveedores', 'Compra\ProveedorController@index')->name('proveedor.index');
Route::get('/crear-proveedor', 'Compra\ProveedorController@create')->name('proveedor.create');
Route::post('/crear-proveedor', 'Compra\ProveedorController@store')->name('proveedor.store');

// ProveedorIsoController.previewCreateIso
Route::get('/vista-previa-crear-iso', 'Compra\ProveedorIsoController@previewCreateIso')->name('proveedorIso.previewCreateIso');
Route::get('/proveedorIso/create/{id}', 'Compra\ProveedorIsoController@create')->name('proveedorIso.create');
Route::get('/getProveedores', 'Compra\ProveedorController@getProveedores')->name('proveedor.getProveedores');

// autorizaciones
Route::get('/autorizacion-jefatura', 'Compra\AutorizacionController@solicitudesPorAutorizar')->name('autorizacion.jefatura');
Route::post('/autorizarConfirmado', 'Compra\AutorizacionController@autorizarConfirmado')->name('autorizacion.respuesta');

Route::post('/autorizacion-finanzas', 'Compra\AutorizacionController@autorizafinanzas')->name('autorizacion.finanzas');
Route::post('/autorizacion-gerencia', 'Compra\AutorizacionController@autorizaGerencia')->name('autorizacion.gerencia');
 

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Compra
|--------------------------------------------------------------------------
*/
Route::get("download-pdf","HomeController@downloadPDF");
Route::get("export","HomeController@export");
Route::get("download-pdf-compra","Compra\HomeController@downloadPDF");

/*
|--------------------------------------------------------------------------
| Cargo
|--------------------------------------------------------------------------
*/
// Route::resource('cargo', 'Compra\CargoController');

//Route::get('cargos', 'Compra\CargoController@index')->name('cargo.index');
Route::get('/cargos', 'Compra\CargoController@index')->name('cargo.index');
Route::get('/nuevo-cargo', 'Compra\CargoController@create')->name('cargo.create');

/*
|--------------------------------------------------------------------------
| Solicitudes
|--------------------------------------------------------------------------
*/
Route::get('/crear-solicitud-de-compras', 'Compra\SolicitudController@create')->name('solicitud.create');

Route::post('/solicitud/show', 'Compra\SolicitudController@show')->name('solicitud.show');

