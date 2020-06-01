<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  
*/



Route::get('/', function () {
    

    return redirect('/'.app()->getLocale());
});

  Route::prefix('{locale?}')->name('locale.')->group(function (){
 
 

    Route::get('/login', 'AuthController@index');
    Route::get('/signin', 'AuthController@registration');
    Route::get('about', 'AboutController@showAbout');
    Route::get('/cart', 'CartController@showCart');
    Route::get('/terms', 'TermsController@showTerms');
    Route::get('/deliverery', 'DeliveryController@showDeliverery');
    Route::get('/forgotpassword', 'ForgotpasswordController@showForgotpassword');
   
    Route::get('/personalacound', 'PersonalacoundController@showPersonalacound');
    Route::get('/product', 'ProductController@showProduct');
    Route::get('/privacy', 'PrivacyController@showPrivacy');
    Route::get('/dashboard', 'AuthController@dashboard'); 
    Route::get('/logout', 'AuthController@logout');
    Route::get('/contact', 'ContactController@showContact');
    Route::get('/', ['uses'=>'IndexController@showIndex', 'as'=>'index']);
    Route::get('/contact', ['uses'=>'ContactController@showContact', 'as'=>'contact']);

   


   Route::get('/categories/{categories}', 'CategoriesController@showCategories');

 

  
  
  


  Route::get('admin_panel', 'AdminController@adminpanel');
  Route::get('admin_panelcatigoris', 'AdminController@admincategoris');
  Route::get('admin_panelsubcatigoris', 'AdminController@adminsubcatigoris');
  Route::get('admin_panelproductgroup', 'AdminController@adminproductgroup');
  Route::get('admin_panelproductbrendname', 'AdminController@adminproductbrendname');
  Route::get('admin_panelproduct', 'AdminController@adminproduct');
  Route::get('admin_panelballsystem', 'AdminController@ballsystem');
  Route::get('menager_metadatapage', 'MenegerController@metadatapage');
  Route::get('menager_about', 'MenegerController@about');


  Route::get('admin_panelcatigoris/deletecatigoris/{name}/{id}', 'AdminController@admincatigorisdelete');
  Route::get('admin_panelsubcatigoris/deletesubcatigoris/{name}/{id}', 'AdminController@adminsubcatigorisdelete');
  Route::get('admin_panelproductgroup/deletegroup/{name}/{id}', 'AdminController@admindeletegroupdelete');



  Route::get('/metadelete/{id}', 'MenegerController@metadelete');
 


  Route::get('admin_panelproduct/editproduct/{id}', 'AdminController@admineditproduct');});

  
  Route::post('/post-login', 'AuthController@postLogin'); 
  Route::post('/post-registration', 'AuthController@postRegistration'); 
  Route::post('/contact', 'ContactController@insert');




  Route::post('/addcatigoris', 'AdminController@addadmincategoris');
  Route::post('/addsubcatigoris', 'AdminController@addadminsubcatigoris');  
  Route::post('/addgroup', 'AdminController@addadminproductgroup');


  Route::post('/addproductbrendname', 'AdminController@addadminproductbrendname');
  Route::post('/addproduct', 'AdminController@addadminproduct');
  Route::post('/addproductbrendname', 'AdminController@addadminsubcatigoris');  
  


  Route::post('/metainsert','MenegerController@insert');
  Route::post('/aboutinsert','MenegerController@aboutupdate');

 