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

Route::get('eloquent', function() {
//	dd( View::make('eloquent')->with('companies', \App\Company::all(), 'products',\App\Product::all() ));
	return View::make('eloquent')->with('companies', \App\Company::all())->with('products', 'categories');
//	return (View::make('eloquent')->with('companies', \App\Company::with('categories', \App\Product::all())));
});
