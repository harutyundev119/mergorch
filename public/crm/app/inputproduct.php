<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inputproduct extends Model
{
    protected $fillable = [
        'fromwhomdidhegetit', 'whatdidheget', 'howmuch','whendidhereceiveit','status','otherinfo'
    ];
}
