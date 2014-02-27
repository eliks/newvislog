<?php

class UserController extends BaseController {

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

	public function signup()
		{
			Auth::logout();
			return View::make('user.signup');
		}
		
	public function signin()
		{
			Auth::logout();
			return View::make('user.signin');
		}
		
	public function signup_submit()
		{
			///Auth::logout();
			$rules = array(
			   'username'=>'required|min:4',
			   'email'=>'required|email|unique:users',
			   'phone'=>'required|between:8,21',
			   'password'=>'required|alpha_num|between:6,20|confirmed',
			   'password_confirmation'=>'required|alpha_num|between:6,20',
			   'accept'=>'required'
			);
			
			$validator = Validator::make(Input::all(), $rules);
			
			if ($validator->fails()) {
			return Redirect::to('signup')
				->withErrors($validator)
				->withInput(Input::except('password'))
				->withInput(Input::except('password_confirmation'));
		} else {
			$user = new User;
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->phone = Input::get('phone');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			
			if (Auth::attempt(array('email' => $user->email, 'password' => Input::get('password')), true))
				{
					return Redirect::intended('welcome');
				} else {
					return Redirect::to('signup');
				}
			}
		}
		
	public function signin_submit()
		{
			Auth::logout();
			$rules = array(
			    'email'=>'required|email|min:6',
			   'password'=>'required|between:6,20',
			);
			
			$validator = Validator::make(Input::all(), $rules);
			
			if ($validator->fails()) {
				return Redirect::to('signin')
					->withErrors($validator)
					->withInput(Input::except('password'));
			} else {
				$email       = Input::get('email');
				$password     = Input::get('password');
				$remember     = false;
				if(Input::get('remember')){
					$remember     = true;
				}
				
				if (Auth::attempt(array('email' => $email, 'password' => $password), $remember))
					{
				    // The user is being remembered...
				    // redirect
					Session::flash('message', 'Successfully Signed in!');
					
					$thisVenue = Venue::where('user_id',Auth::user()->id)->first();
					
					return Redirect::to('dashboard/'.$thisVenue->name);
					
					} else {
						Session::flash('message', 'Sorry! Wrong email or password.');
						return Redirect::to('signin');
					}
			}
		}
		
	public function signout()
		{
			Auth::logout();
			return Redirect::to('signin');
		}

	public function welcome()
		{
			//Auth::logout();
			return View::make('user.welcome');
		}

	public function welcome_submit(){
			$rules = array(
			    'name'=>'required|alpha_num|min:3|unique:venues,name',
			   'email'=>'required|email|between:6,40',
			   'address'=>'required',
			   'display_name'=>'required',
			   'display_welcome'=>'required',
			   'display_footer'=>'required',
			);
			
			$validator = Validator::make(Input::all(), $rules);
			
			if ($validator->fails()) {
				return Redirect::to('welcome')
					->withErrors($validator)
					->withInput();
			} else {
					$venue = new Venue;
					
					// return Auth::user()->id;
					
					$venue->name       = Input::get('name');
					$venue->email     = Input::get('email');
					$venue->address       = Input::get('address');
					$venue->display_name     = Input::get('display_name');
					$venue->display_welcom       = Input::get('display_welcome');
					$venue->display_footer       = Input::get('display_footer');
					$venue->user_id     = Auth::user()->id;
					
					$venue->save();
					
					return Redirect::to('dashboard/'.$venue->name);
				}
		}
	
	public function venue_submit(){
		$rules = array(
			    'name'=>'required|alpha_num|min:3|unique:venues,name',
			   'email'=>'required|email|between:6,40',
			   'address'=>'required',
			   'display_name'=>'required',
			   'display_welcome'=>'required',
			   'display_footer'=>'required',
			);
			
			$validator = Validator::make(Input::all(), $rules);
			
			if ($validator->fails()) {
				return Redirect::to('welcome')
					->withErrors($validator)
					->withInput();
			} else {
					$venue = new Venue;
					
					// return Auth::user()->id;
					
					$venue->name       = Input::get('name');
					$venue->email     = Input::get('email');
					$venue->address       = Input::get('address');
					$venue->display_name     = Input::get('display_name');
					$venue->display_welcom       = Input::get('display_welcome');
					$venue->display_footer       = Input::get('display_footer');
					$venue->user_id     = Auth::user()->id;
					
					$venue->save();
					
					return Redirect::to('dashboard/'.$venue->name);
				}
	}
	
	
}