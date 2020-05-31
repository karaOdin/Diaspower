<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HotelReservation extends Model
{
    public function hotel()
    {
    	return $this->belongsTo(Hotel::class);
    }
}
