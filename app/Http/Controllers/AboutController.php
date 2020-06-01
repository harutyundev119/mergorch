<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;

class AboutController extends Controller
{
  public function showAbout($locale){
  		
  		app()->setLocale($locale);
        

        return view('about', ['locale'=>$locale]);
    }

 
}
