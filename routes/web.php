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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Usuarios
Route::get('/usuarios', 'UsersController@index');
Route::get('/usuarios/create', 'UsersController@create');
Route::post('/usuarios/save', 'UsersController@save');

// Requisiciones
Route::get('/requisiciones', 'RequisicionesController@index');
Route::get('/requisiciones/create', 'RequisicionesController@create');

// Obras
Route::get('/obras', 'ObrasController@index');
Route::get('/obras/create', 'ObrasController@create');
Route::post('/obras/save', 'ObrasController@save');

//Ubicaciones
Route::get('/ubicaciones', 'UbicacionesController@index');
Route::get('/ubicaciones/create', 'UbicacionesController@create');
Route::post('/ubicaciones/save', 'UbicacionesController@save');
//Unidades
Route::post('/unidades/create', 'UnidadesController@create');
//Categorias
Route::post('/categorias/create', 'CategoriasController@create');
//Inventario
Route::get('/inventario', 'InventarioController@index');
Route::get('/inventario/stocks', 'InventarioController@indexStock');
Route::get('/inventario/createStockProduct', 'InventarioController@createStockProduct');
Route::get('/inventario/create', 'InventarioController@create');
Route::post('/inventario/saveStockProduct', 'InventarioController@saveStockProduct');
//Stocks
Route::post('/inventario/createStockProduct', 'InventarioController@createStockProduct');
