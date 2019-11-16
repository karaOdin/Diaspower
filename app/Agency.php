<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\AgencyScope;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use EloquentFilter\Filterable;

class Agency extends Model
{

    public function cars()
	{
	    	return $this->hasMany(Car::class);
	}
	
	/*
	protected static function boot()
	{
	    parent::boot();
	    	if (Auth::user()->role_id ==3) 
	    	{

			    static::addGlobalScope('user_id', function (Builder $builder) {
			    		$builder->where('user_id','=', Auth::user()->id);
			    	
			        
			    });
			}
	}*/
		 use Filterable;

	public function scopeActive($query)
	{
		if(Auth::user()->role_id == 3)
		{
			return $query->where('user_id',Auth::user()->id);
		}
		
	}
}
