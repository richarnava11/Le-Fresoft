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
	return View::make('hello');
});

Route::model('products','Product');
Route::model('entrances','Entrance');
Route::model('exits','Exit');
Route::model('details','Detail');

Route::bind('products',function($value, $route){
	return Product::whereId($value)->first();
});

Route::resource("products", "ProductsController");
Route::resource("entrances","EntrancesController");
Route::resource("exits","ExistsController");
Route::resource("details","DetailsController");
Route::resource("users","UsersController");

