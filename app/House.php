<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class House extends Model
{
    public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function rentalagency()
    {
    	return $this->belongsTo(RentalAgncy::class, 'rental_agncy_id');
    }
}
