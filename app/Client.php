<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['clientname', 'phone', 'email', 'address', 'city', 'state', 'zipcode'];
}
