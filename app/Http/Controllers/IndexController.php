<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
Use App\Category;
Use App\Product;
Use App\Group;
Use App\Subcategory;
Use App\Brend;
use Illuminate\Http\Request;

class IndexController extends Controller
{
 
     public function showIndex($locale){ 

     	app()->setLocale($locale);

     	$categorys = Category::where('lang', $locale)->get();
        
        return view('index',['categorys'=>$categorys]);
    }
 
}
