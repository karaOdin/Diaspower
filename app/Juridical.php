<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Juridical extends Model
{
   public function city()
   {
   		$this->belongsTo(City::class);
   }

   public function user()
   {
   		$this->belongsTo(User::class);
   }

   
}
