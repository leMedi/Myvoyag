<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function departureSite()
    {
        return $this->belongsTo('App\Site', 'departure_site_id');
    }

    public function destinationSite()
    {
        return $this->belongsTo('App\Site', 'destination_site_id');
    }

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
