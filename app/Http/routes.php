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


Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');





  Route::get('articles','ArticlesController@index');

 Route::get('articles/create','ArticlesController@create');

 Route::get('articles/{id}','ArticlesController@show');

 Route::get('articles/{id}/edit','ArticlesController@edit');

 Route::get('articles/destroy/{id}','ArticlesController@destroy');

 Route::post('articles','ArticlesController@store');

 Route::post('articles/update/{id}', 'ArticlesController@update');



//Route::resource('articles','ArticlesController');

Route::get('articles/eliminar/{id}', 'ArticlesController@eliminar');

Route::controllers([

		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',

		]);


?>
