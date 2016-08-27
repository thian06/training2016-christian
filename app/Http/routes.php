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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


 Route::resource('noticias', 'NoticiaController');
// Route::post('noticias', 'Auth\AuthController@postLogin');
route::get('noticias/{id}', 'NoticiasController@show')->where(['id' => '[0-9]+']);
Route::get('noticias/{id}/delete', [
    'as' => 'noticias.delete',
    'uses' => 'NoticiaController@destroy',
]);
