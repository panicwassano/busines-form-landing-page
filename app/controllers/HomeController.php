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
	protected $claim;

	public function __construct(Claim $claim)
    {
    	$this->$claim = $claim;
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

	public function getIndex()
	{
		return View::make('pages.index');
	}

	public function postIndex()
	{
		return Redirect::back(); 
	}
}
