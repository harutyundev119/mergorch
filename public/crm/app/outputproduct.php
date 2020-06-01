<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outputproduct extends Model
{
     protected $fillable = [
        'towhomdidhegiveit', 'whatdidhegive', 'howmuch','whendidhegiveit','whentogetitback','status','otherinfo'
    ];
}
