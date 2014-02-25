<?php

	class Venue extends Eloquent
	{
		
		/**
		 * The database table used by the model.
		 *
		 * @var string
		 */
		protected $table = 'venues';
		
		
		
	 public function visits()
	    {
	        return $this->hasMany('Visit');
	    }
		
	public function user()
	    {
	        return $this->belongsTo('User', 'user_id');
	    }

	
}