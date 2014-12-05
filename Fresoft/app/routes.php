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
	return View::make('login');
});

	/**Route::model('entrances', 'Entrance');
	Route::model('exits', 'Exit');
	Route::model('details', 'Detail');

	Route::bind('entrances',function($value, $route){
		return Entrance::whereId($value)->first();
	});
	Route::bind('exits',function($value, $route){
		return Exit::whereId($value)->first();
	});
	Route::bind('details',function($value, $route){
		return Detail::whereId($value)->first();
	});**/
	Route::group(array('before' => 'auth'), function()
	{

		Route::resource("users", "UsersController");
		Route::resource("products", "ProductsController");
		Route::resource("entrances", "EntrancesController");
		Route::resource("exits", "ExitsController");
		Route::resource("details", "DetailsController");

		});

		Route::get('login', array('uses' => 'HomeController@showLogin'));


		Route::post('login', array('uses' => 'HomeController@doLogin'));

		Route::get('logout', array('uses' => 'HomeController@doLogout'));

	 //fin proteccion de rutas

	
	


