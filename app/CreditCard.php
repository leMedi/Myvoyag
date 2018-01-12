<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    public $timestamps = false;

    public function expirydate()
    {
        return sprintf("%02d", $this->expMonth) . '/' . $this->expYear;
    }

    public function cardNumber()
    {
        return chunk_split($this->number, 4, ' ');
    }
}
