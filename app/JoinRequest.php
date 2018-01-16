<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinRequest extends Model
{
    public function owner() {
        return $this->belongsTo('App\User');
    }

    public function demande() {
        return $this->belongsTo('App\Demande');
    }
}
