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

	/**
	 * Controller constructor
	 */
	public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
     * Index route with get method
     * 
     * @return void
     */
	public function getIndex()
	{
		return View::make('pages.index');
	}

	/**
	 * Index route with post method
	 * 
	 * @return void
	 */
	public function postIndex()
	{	
		if(Request::ajax())
		{
			$validator = Validator::make(Input::all(), Claim::$rules, Claim::$messages);

			if($validator->fails())
			{
				return $validator->messages();
			}

			$claim = new Claim(Input::all());
			$claim->save();

			Event::fire('models.claim.create', [$claim]);

			return ['success' => 'true'];
		}
		

		return Redirect::to(URL::current())->withInput(); 
	}
}
