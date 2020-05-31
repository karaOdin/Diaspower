<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends   \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;


    public function reservations()
    {
        return $this->hasOne(Reservation::class);
    }

    public function agency()
    {
        return $this->hasOne(Agency::class);
    }


    public function juridicals()
   {
        $this->hasMany(Juridical::class);
   }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','adress','city_id','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
