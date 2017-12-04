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

Route::get('/', 'HomeController@index');
Route::get('/register','HomeController@register');
Route::get('abstract','HomeController@fileUploadView');
Route::post('abstract','HomeController@fileUpload');
Route::post('submit','HomeController@store');
Route::get('login','AdminController@login');
Route::post('login','AdminController@check_login');
Route::get('logout','AdminController@logout');

Route::group(['middleware' => 'AdminAuth'], function () {
	Route::get('view_registration',"AdminController@view");
	Route::get('registration',"AdminController@registration");
	Route::get('download',"AdminController@download");
});
