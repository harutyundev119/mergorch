<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code','price','newprice','quantity','discrepshn','catigoric','subcatigoris','group','brend','lang','photo','otherinfo','offeroftheday','updates','specialoffers','show'
    ];
}
