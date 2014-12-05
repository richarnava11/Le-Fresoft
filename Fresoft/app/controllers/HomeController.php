<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('login');
	}

	public function showLogin(){

		if (Auth::check())
		{
			return Redirect::to('products');
		}else{

			//show the form que esta en guardada en la Vista
			//$this->layout->content = View::make('home.login');
			return View::make('home.login');
		}
		

		//return View::make('login');
	}

	public function doLogin(){
		//process the form

		// validate the info, create rules for the inputs
		$rules = array(
			'nombre'    => 'required|alphaNum|min:5', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:5' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'nombre' 	=> Input::get('nombre'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata, Input::get('rememberme', 0) ) ) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				
				return Redirect::to('products');

				//echo 'SUCCESS!';

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

		}
	
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}
