<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('beranda.index');
});
Route::resource("vila", "ReservasiController");
Route::resource("beranda", "BerandaController");
Route::resource("about", "AboutController");
Route::resource("aboutme", "AboutmeController");
Route::resource("login", "LoginController");
Route::resource("registrasi", "RegisterController");
Route::resource("listvila", "LayananController");
Route::resource("databoking", "DatabokingController");
Route::resource("home", "HomeController");
Route::post("vila/post", "ReservasiController@store");

Route::get("databoking/{id}/destroy", "DatabokingController@destroy");
Route::post('databoking/update/{id}', array('as' => 'databoking.update', 'uses' => 'DatabokingController@update'));
Route::get('databoking/edit/{id}', 'DatabokingController@edit');