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


class InsertdateController extends Controller
{
      public function postinput(Request $data)
    {  
         inputproduct::create([
        'fromwhomdidhegetit' => $data['fromwhomdidhegetit'],
        'whatdidheget' => $data['whatdidheget'],
         'howmuch' => $data['howmuch'],
        'whendidhereceiveit' => $data['whendidhereceiveit'],
        'status' => '1',
        'otherinfo' => '1',
      ]);
       
        return Redirect::to("dashboard");
    }


     public function postout(Request $data)
    {  
         outputproduct::create([
        'towhomdidhegiveit' => $data['towhomdidhegiveit'],
        'whatdidhegive' => $data['whatdidhegive'],
        'howmuch' => $data['howmuch'],
        'whendidhegiveit' => $data['whendidhegiveit'],
        'whentogetitback' => $data['whentogetitback'],
        'status' => '1',
        'otherinfo' => '1',
      ]);
       
        return Redirect::to("dashboard");
    }
  
     public function postcurrent(Request $data)
    {  
         currentproduct::create([
        'whoshouldhegetitfrom' => $data['whoshouldhegetitfrom'],
        'whatshouldheget' => $data['whatshouldheget'],
         'howmuchshouldIget' => $data['howmuchshouldIget'],
        'whentogetit' => $data['whentogetit'],
        'status' => '1',
        'otherinfo' => '1',
      ]);
       
        return Redirect::to("current");
    }
}
