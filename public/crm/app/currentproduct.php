<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currentproduct extends Model
{
     protected $fillable = [
        'whoshouldhegetitfrom', 'whatshouldheget', 'howmuchshouldIget','whentogetit','status','otherinfo'
    ];
}
