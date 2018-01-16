<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $timestamps = false;

    public function hotels()
    {
        return $this->hasMany('App\Hotel');
    }
}
