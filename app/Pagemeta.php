<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagemeta extends Model
{
    protected $fillable = [
        'pagename', 'metatitle','metadescription','otherinfo'
    ];
}
