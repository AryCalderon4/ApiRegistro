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

Route::resource('ubicacion', 'ubicacionCtrl');
//Route::funcion('ruta', 'controlador@funcion');

Route::get('ubicacionAll', 'ubicacionCtrl@showAll');

Route::resource('negocios', 'negociosCtrl');
Route::get('negociosAll', 'negociosCtrl@showAll');

Route::resource('contactos', 'contactosCtrl');
Route::get('contactosAll', 'contactosCtrl@showAll');

Route::resource('login', 'loginCtrln');