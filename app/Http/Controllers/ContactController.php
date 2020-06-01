<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response;



class ContactController extends Controller
{
   public function showContact(){
        return view('contact');
    }


        public function insert(Request $request){

        	$request->validate([
    'name' => 'required',
    'email' => 'required',
    'text' => 'required',
             ]);
        	echo  $name = $request->input('name');
        	$name = $request->input('name');
       		$email = $request->input('email');
			$text = $request->input('text');
         $data=array('name'=>$name,"email"=>$email,"text"=>$text);


         DB::table('contacts')->insert($data);
         return view('contact');
         }
     }