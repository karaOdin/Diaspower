<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hotel extends Model
{
	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function hotelReservation()
	{
		return $this->hasMany(HotelReservation::class);
	}
}
