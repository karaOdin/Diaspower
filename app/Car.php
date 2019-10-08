<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
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
