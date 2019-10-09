<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
	protected $fillable = [
        'user_id', 'car_id', 'city_id','pickupDate','returnDate','price','pickupLocation','returnLocation'
    ];


    public function car()
    {
    	return $this->belongsTo(Car::class);
    }

    public function agency()
    {
    	return $this->belongsTo(Agency::class);
    }

     public function city()
    {
    	return $this->belongsTo(City::class);
    }

     public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
