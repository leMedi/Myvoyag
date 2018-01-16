<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email', 'password', 'departement', 'type','numPass', 'tel',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function creditCard()
    {
        return $this->hasOne('App\CreditCard');
    }


    public function site()
    {
        return $this->belongsTo('App\Site');
    }

    public function fullname()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
    //TODO: responsable function
}
