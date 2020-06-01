<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
Use App\Category;
Use App\Product;
Use App\Group;
Use App\Subcategory;
Use App\Brend;
Use App\User;
Use App\Aboutstatic;
Use DB;
Use App\Pagemeta;

class MenegerController extends Controller
{
    public function metadatapage(){
       $products = Pagemeta::all(); 
    return view('menager_metadatapage',['products'=>$products]);
    }


    public function insert(Request $data){
    
		    Pagemeta::create([ 
		    		    'pagename' => $data['pagename'],
		                'metatitle'=>$data['metatitle'],
		                'metadescription'=>$data['metadescription'],  
		                'otherinfo'=>$data['otherinfo'],
		                   	 ]);
		   

    return Redirect::to('{lang}/menager_metadatapage');
      
    }

     public function metadelete($id){


              Pagemeta::where( 'id', $id)->delete();
   
    return Redirect::to('{lang}/menager_metadatapage');
      
    }


    public function about(){
      


    return view('menager_about');
  }
    public function aboutupdate(Request $data){
      echo "hrrlp";
       Aboutstatic::create([ 
                'content' => $data['descript'],
                'lang'=>$data['lang'],
                'otherinfo'=>"0",
                         ]);
  
      
    return Redirect::to('{lang}/menager_about');
  }


    public function about(){
      


    return view('menager_about');
  }
    public function privaey(Request $data){
      echo "hrrlp";
       Aboutstatic::create([ 
                'content' => $data['descript'],
                'lang'=>$data['lang'],
                'otherinfo'=>"0",
                         ]);
  
      
    return Redirect::to('{lang}/menager_about');
  }
    public function about(){
      


    return view('menager_about');
  }

    public function delivaryupdate(Request $data){
      echo "hrrlp";
       Aboutstatic::create([ 
                'content' => $data['descript'],
                'lang'=>$data['lang'],
                'otherinfo'=>"0",
                         ]);
  
      
    return Redirect::to('{lang}/menager_about');
  }
}
