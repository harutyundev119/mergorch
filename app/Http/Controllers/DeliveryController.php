<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function showDeliverery(){
        return view('deliverery');
    }
}
