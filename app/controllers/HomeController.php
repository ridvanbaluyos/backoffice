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
		return View::make('hello');
	}

	public function index()
	{
		// Section::inject('title', 'Backoffice - Home');
		return View::make('home.index');
	}

	public function login()
	{
		// Section::inject('title', 'Backoffice - Login');
		if (0) // already logged in
		{
			return Redirect::to('home');
		}
		else
		{
			return View::make('home.login');
		}
	}

}
