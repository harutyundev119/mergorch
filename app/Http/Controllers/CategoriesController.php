<?php

namespace App\Http\Controllers;

use Validator,Redirect,Response;
Use App\Category;
Use App\Product;
Use App\Group;
Use App\Subcategory;
Use App\Brend;
use DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showCategories($categories){

    	$lang = app()->getLocale();
     	
     	
     	$Product = Product::where('lang', $lang)->where('catigoric', $categories)->get();




        return view('categories');
    }
}
