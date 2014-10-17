<?php 

class PublicController extends BaseController{


	public function home()
	{
		return View::make('home');
	}

	public function login()
	{
		return View::make('login')
						->with('title', 'Login');
	}

	public function doLogin()
	{
		$rules = array
		(
	    	'email' 	=> 'required',
	    	'password' 		=> 'required'
		);
		$allInput = Input::all();
		$validation = Validator::make($allInput, $rules);

		//dd($allInput);


		if($validation->fails())
		{

			return Redirect::route('login')
								->withInput()
								->withErrors($validation);
		}
		else
		{
			
			$credentials = array
			(
				'email'		=>	Input::get('email'),
				'password'			=>	Input::get('password')
			);

			if (Auth::attempt($credentials))
			{

				//Session::put('role_title', Auth::user()->role->role_title);

			    return Redirect::intended('dashboard');
			}
			else
			{
				return Redirect::route('login')
									->withInput()
									->withErrors('Error in Email Address or Password.');
			}
		}
	}
	public function logout()
	{
		Session::forget('role_title');
		Auth::logout();

		return Redirect::route('login')
							->with('success', 'You have successfully logged out');
	}
}