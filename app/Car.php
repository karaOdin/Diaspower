<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use EloquentFilter\Filterable;

class Car extends Model
{
	/*
	protected static function boot()
	{
		
	    parent::boot();
	    if (Auth::check() && Auth::user()->role_id ==3)
	    {

		    static::addGlobalScope('user_id', function (Builder $builder) {
		    		$builder->where('user_id','=', Auth::user()->id);
		    	
		        
		    });
		}
	}*/

	use Filterable;
	
	public function scopeCar($query)
	{
		if (Auth::user()->role_id == 3) 
		{
			return $query->where('user_id',Auth::user()->id);
		}
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}

    public function agency()
    {
    	return $this->belongsTo(Agency::class);
    }

    public function color()
    {
    	return $this->belongsTo(Color::class);
    }

    public function fuel()
    {
    	return $this->belongsTo(Fuel::class);
    }

	public function make()
    {
    	return $this->belongsTo(Make::class);
    }
 

    public function type()
    {
    	return $this->belongsTo(Type::class);
    }
}
