<?php

class VsController extends BaseController {

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

	public function form($name)
	{
		//Invitation::where('user_id', '=', Auth::user()->id)
									//->where('closingdate', '>=', date("Y-m-d"))
									//->where('published', '=', 1)
									//->orderBy('closingdate', 'DESC')
								//	->get();
		$venue = Venue::where('name', '=', $name)
						->first();
		return View::make('form.index')
					->with('venue',$venue);
	}
	
	public function submit($name)
	{// validate
		$rules = array(
			'fname'       => 'required',
			'email'       => 'required|email',
			'phone'       => 'required|numeric',
			"host"        => 'required',
			"purp"        => 'required',
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			// Session::flash('clickitem', 'projects_new');
			return Redirect::to('vs/'.$name)
				->withErrors($validator);
		} else {
			
			$visit = new Visit;
			
			$visit->fullname  = Input::get('fname');
			$visit->email  = Input::get('email');
			$visit->phone  = Input::get('phone');
			$visit->host  = Input::get('host');
			$visit->purpose  = Input::get('purp');
			$venue_id  = Venue::where('name', '=', $name)->first()->id;
			
			$visit->venue_id = 0;
			
			if($venue_id){
				$visit->venue_id = $venue_id;
			}
			
			$visit->save();
			
				}
			
		return View::make('form.thanks');
	}

	public function dashboard($name)
		{
			if(Auth::check()){
				$venue = Venue::where('user_id', '=', Auth::user()->id)
									->where('name', '=', $name)
									->first();
									
				if(count($venue)>0){
					
					/*$visits_today = Visit::whereHas('venue', function($q)
						{
						    $q->where('user', function($r)
							{
							    $r->where('id', Auth::user()->id);
							
							});
						
						})->get();*/
					
					$visits_today = Visit::where('venue_id', $venue->id)
									->where('created_at', '>=', date("Y-m-d"))
									->get();
									
					$recent_visits = Visit::where('venue_id', '=', $venue->id)
										->where('created_at', '>=', mktime(0,0,0,date("m"),date("d")-7,date("Y")))
										->get();
										
					$archive_visits = Visit::where('venue_id', '=', $venue->id)
										->where('created_at', '<', mktime(0,0,0,date("m"),date("d")-7,date("Y")))
										->get();
										
					$venues = Venue::where('user_id', '=', Auth::user()->id)
										->get();
										
					//$venue  = Venue::where('name', '=', $name)->get();
					// $venue->visits;
					return View::make('dashboard.index')
									->with('today_visits',$visits_today)
									->with('recent_visits',$recent_visits)
									->with('archive_visits',$archive_visits)
									->with('venues',$venues)
									->with('name',$name);
					} else {
						return View::make('dashboard.index')
									->with('today_visits',new stdClass())
									->with('recent_visits',new stdClass())
									->with('archive_visits',new stdClass())
									->with('venues',new stdClass())
									->with('name',$name);
					}
									
				
			} else {
				return Redirect::to('signin');
			}
		}

}