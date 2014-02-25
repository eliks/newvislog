<?php

	class Visit extends Eloquent
	{
		
		/**
		 * The database table used by the model.
		 *
		 * @var string
		 */
		protected $table = 'visits';
		
		
		
		 public function venue()
	    {
	        return $this->belongsTo('Venue');
	    }
	}