<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','usuario_app\ingresarController@fnc_ingresar');
Route::post('usuario_app/ingresar', ['as' =>'usuario_app/ingresar', 'uses' => 'Auth\AuthController@fnc_ingresar']);
Route::get('usuario_app/salir', ['as' => 'usuario_app/salir', 'uses' => 'Auth\AuthController@fnc_salir']);
Route::get('/principal', function () {
    return view('principal');
});
Route::get('administracion/nuevo_usuario', function () {
    return view('usuario_app.create');
});
Route::get('/home', function () {
    return view('home');
});