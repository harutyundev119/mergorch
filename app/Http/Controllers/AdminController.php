<?php

namespace App\Http\Controllers;

use Validator,Redirect,Response;
use Illuminate\Http\Request;
Use App\Category;
Use App\Product;
Use App\Group;
Use App\Subcategory;
Use App\Brend;
use App\User;
use DB;

// {{ url('/login') }}


class AdminController extends Controller
{
    public function adminpanel(){
        return view('admin_panel');
    }


     public function admincategoris(){
         $products = Category::all();
         
        return view('admin_panelcategoris',['products'=>$products]);
    }



     public function adminsubcatigoris(){

         $categorys = Category::all();
         $subcategorys = Subcategory::all();

        return view('admin_panelsubcatigoris',['categorys'=>$categorys],['subcategorys'=>$subcategorys]);
    }


public function ballsystem(){

         $users = User::all();
         

return view('admin_panelballsystem',['users'=>$users]);
    }
     public function adminproductgroup(){


            $subcategorys = Subcategory::all();
            
            $gruops = Group::all();



        return view('admin_panelproductgroup',['subcategorys'=>$subcategorys],['gruops'=>$gruops]);
    }





    public function adminproductbrendname(){




        return view('admin_panelproductbrendname');
    }


    public function adminproduct(){

              $subcategorys = Subcategory::all();
            
              $gruops = Group::all();
             

              $products = Product::all();
            
            
            

        return view('admin_panelproduct',
            ['gruops'=>$gruops , 'products'=>$products ],
            ['subcategorys'=>$subcategorys],
            
         
        );
    }


    public function addadminproduct(Request $data){

         


        $file = request()->file('image');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./images/categories/', $fileName); 
     Product::create([ 'name' => $data['name'],
                        'code'=>$data['serialnamber'],
                        'price'=>$data['price'],  
                        'newprice'=>$data['previous_price'], 
                        'discrepshn'=>$data['editor1'], 
                        'catigoric'=>$data['catigoris'], 
                        'quantity'=>$data['quantity'], 
                        'subcatigoris'=>$data['subcatigoris'], 
                        'lang'=>$data['lang'], 
                        'brend'=>$data['brend'], 
                        'otherinfo'=>'otherinfo',
                        'photo' =>$fileName,
                        'lang'=> $data['lang'], 
                        'group'=> $data['group'], 
                        'offeroftheday'=>'0',
                        'updates'=>'0',
                        'specialoffers'=>'0',
                        'show'=>'1',
                        ]);
return Redirect::to('{lang}/admin_panelproduct');
      
    }





    // post

      public function addadmincategoris(Request $data){
    
        $file = request()->file('image');
       
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./images/categories/', $fileName); 
        
     Category::create([ 'name' => $data['name'], 'data' =>$fileName,'lang'=> $data['lang'] ]);
            
        return Redirect::to('{lang}/admin_panelcatigoris');
       
    }





     public function addadminsubcatigoris(Request $data){

          
         Subcategory::create([ 'name' => $data['name'], 'categories' =>$data['catigoris'],'lang'=> $data['lang'] ]);


      return Redirect::to('{lang}/admin_panelsubcatigoris');
    }



    public function addadminproductgroup(Request $data){

            Group::create([ 'name' => $data['name'], 'subcategories' =>$data['subcategories'],'lang'=> $data['lang'] ]);



       return Redirect::to('{lang}/admin_panelproductgroup');
    }
   

     public function admincatigorisdelete($lang , $name, $id ){


             
              $lent = Subcategory::where( 'categories', $name)->count();

              if( $lent == "0"){

              Category::where( 'id', $id)->delete();
       
}

              
       


       return Redirect::to('{$lang}/admin_panelcatigoris');
    }


     public function adminsubcatigorisdelete($lang , $name, $id ){


              echo $name;
              $lent = Group::where( 'subcategories', $name)->count();
              echo $lent ;
              echo $id;
              if( $lent == "0"){
              Subcategory::where( 'id', $id)->delete();
               }
       return Redirect::to('{$lang}/admin_panelsubcatigoris');
    }

     public function admindeletegroupdelete($lang , $name, $id ){
              echo $name;
              $lent = Product::where( 'group', $name)->count();
              echo $lent ;
              echo $id;
              if( $lent == "0"){

              Group::where( 'id', $id)->delete();
               }
       return Redirect::to('{$lang}/admin_panelproductgroup');
     }


     // public function admineditproduct($lang , $name, $id ){
     //          echo $name;
     //          die;
     //          $lent = Product::where( 'group', $name)->count();
     //          echo $lent ;
     //          echo $id;
     //          if( $lent == "0"){

     //          Group::where( 'id', $id)->delete();
     //           }
     //   return Redirect::to('{$lang}/admin_panelproductgroup');
     // }


     public function admineditproduct($lang , $id ){
             
              
            
               $products = Product::where( 'id', $id)->get();

               $subcategorys = Subcategory::all();
              
               
               $gruops = Group::all();
                         return view('admin_paneledithproduct',
              ['gruops'=>$gruops , 'products'=>$products ],
              ['subcategorys'=>$subcategorys],
            
         
        );
     }
}
