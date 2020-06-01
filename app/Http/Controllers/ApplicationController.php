<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function viewApplication($id, $locale)
    {   
        app()->setLocale($locale);

        $products = Product::where('id','=',$id)->get();

        return view('productdetail', ['products'=>$products]);
    }
}
