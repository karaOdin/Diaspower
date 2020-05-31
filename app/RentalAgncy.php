<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RentalAgncy extends Model
{
    public function houses()
	{
	    return $this->hasMany(House::class);
	}
	
	public function city()
	{
		return $this->belongsTo(City::class);
	}
}
