<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HouseReservation extends Model
{
    protected $fillable = [
        'user_id',
        'house_id',
        'rental_agncy_id', 
        'city_id', 
        'pickupDate', 
        'returnDate', 
        'price', 
        'pickupLocation', 
        'returnLocation'
    ];


    public function house()
    {
    	return $this->belongsTo(House::class);
    }

    public function agency()
    {
    	return $this->belongsTo(RentalAgncy::class);
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
