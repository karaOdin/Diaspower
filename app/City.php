<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}

	public function agencies()
	{
	    return $this->hasMany(Agency::class);
	}

	public function cars()
	{	
		return $this->hasManyThrough(Car::class, Agency::class);
	}

	public function juridicals()
   {
   	    $this->hasMany(Juridical::class);
   }
}
