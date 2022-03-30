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

//---------Index---------

Route::name('index')->get('index/', 'SistemController@index');

//--------------juguettoys---------------


Route::name('cero')->get('cero/', 'SistemController@cero');
Route::name('ad')->get('ad/', 'SistemController@ad');
Route::name('admi')->get('admi/', 'SistemController@admi');
Route::name('cono')->get('cono/', 'SistemController@cono');
Route::name('juren')->get('juren/', 'SistemController@juren');
Route::name('secuanda')->get('secunda/', 'SistemController@secunda');
Route::name('ta_usu')->get('ta_usu/', 'SistemController@ta_usu');
Route::name('categorias')->get('categorias/', 'SistemController@categorias');
Route::name('servicios')->get('servicios/', 'SistemController@servicios');
Route::name('térmi')->get('térmi/', 'SistemController@térmi');
Route::get('/ver', 'SistemController@ver');
Route::get('/pdf', 'SistemController@download')->name('pdf');

//-------------login Usuario-------------------------
Route::name('login')->get('login/', 'LoginController@login');    //   
Route::name('validar')->post('validar/', 'LoginController@validar');    //  
Route::name('logout')->get('logout/', 'LoginController@logout');

//-------------login Administracion-------------------------
Route::name('loginad')->get('loginad/', 'LoginController@loginad');    //   
Route::name('validarad')->post('validarad/', 'LoginController@validarad');    //  
Route::name('logoutad')->get('logoutad/', 'LoginController@logoutad');

//------------------------------------nuevo-------------------------------------------------
Route::name('nuevo')->get('nuevo/', 'LoginController@nuevo');
Route::name('guardar')->post('guardar/', 'LoginController@guardar');

//------------------------------------ agregar / usuario / admi -------------------------------------------------
Route::name('agregar')->get('agregar/', 'LoginController@agregar');
Route::name('guardar2')->post('guardar2/', 'LoginController@guardar2');

//------------------------------------ agregar / usuaradministrador / admi -------------------------------------------------
Route::name('agregar2')->get('agregar2/', 'LoginController@agregar2');
Route::name('guardar3')->post('guardar3/', 'LoginController@guardar3');

//------------------------------------ agregar / usuaradministrador / admi -------------------------------------------------
Route::name('agregar3')->get('agregar3/', 'LoginController@agregar3');
Route::name('guardar4')->post('guardar4/', 'LoginController@guardar4');

//------------- Administracion / Usuarios -------------------------
Route::name('mostrar')->get('mostrar/', 'LoginController@mostrar');
Route::name('editar')->get('editar/{id}', 'LoginController@editar');  
Route::name('salvar')->put('salvar/{id}', 'LoginController@salvar'); 

//------------- Administracion / Admi -------------------------
Route::name('mostrar2')->get('mostrar2/', 'LoginController@mostrar2');
Route::name('editar2')->get('editar2/{id}', 'LoginController@editar2');  
Route::name('salvar2')->put('salvar2/{id}', 'LoginController@salvar2'); 

//------------- Administracion / juguete -------------------------
Route::name('mostrar3')->get('mostrar3/', 'LoginController@mostrar3');
Route::name('editar3')->get('editar3/{id}', 'LoginController@editar3');  
Route::name('salvar3')->put('salvar3/{id}', 'LoginController@salvar3'); 

//---------------------------Borrar-------------------------------------
Route::name('borrar')->delete('borrar/{id}', 'LoginController@borrar');    // para formulario utlisamos el metodo
Route::name('borrar2')->delete('borrar2/{id}', 'LoginController@borrar2');
Route::name('borrar3')->delete('borrar3/{id}', 'LoginController@borrar3');

//---------------------------Detalle-------------------------------------
Route::name('detalle')->get('detalle/{id}', 'LoginController@detalle');
Route::name('nombre')->get('nombre/{id}', 'LoginController@nombre');

/*Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');*/
