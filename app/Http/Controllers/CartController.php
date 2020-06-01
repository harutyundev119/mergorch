<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart($locale){
    	app()->setLocale($locale);
        return view('cart');
    }
}
