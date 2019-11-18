<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\AgencyScope;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use EloquentFilter\Filterable;

class Agency extends Model
{
	use Filterable;

    public function cars()
	{
	    	return $this->hasMany(Car::class);
	}
	
	public function city()
	{
		return $this->belongsTo(City::class);
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
		 

	public function scopeActive($query)
	{
		if(Auth::user()->role_id == 3)
		{
			return $query->where('user_id',Auth::user()->id);
		}
		
	}
}
