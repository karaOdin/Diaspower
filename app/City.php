<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}
}
