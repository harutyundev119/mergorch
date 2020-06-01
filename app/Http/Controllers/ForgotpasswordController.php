<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    public function showForgotpassword(){
        return view('forgotpassword');
    }
}
