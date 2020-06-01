<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use App\inputproduct;
use App\outputproduct;
use App\currentproduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PageController extends Controller
{
    public function output()
    {



        
        return view('output');
    }  
  public function current()
    {   
        return view('current');
    }
    public function currentable()
    {     $alls = currentproduct::all();
        return view('currentable',['alls'=>$alls]);
    }
    public function outputtable()
    {    $alls = outputproduct::all();
        return view('outputtable',['alls'=>$alls]);
    }
    public function inputtable()
    {    $alls = inputproduct::all();
        return view('inputtable',['alls'=>$alls]);
    }
}
