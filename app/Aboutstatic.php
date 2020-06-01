<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutstatic extends Model
{
     protected $fillable = [
        'content', 'lang','otherinfo'
    ];
}
