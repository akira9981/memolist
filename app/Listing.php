<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    return $this->hasMany('App\Card');
}
