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
    return view('login');
});

  Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');
  Route::get('output', 'PageController@output');
  Route::get('current', 'PageController@current');

  Route::get('inputtable', 'PageController@inputtable');
  Route::get('outputtable', 'PageController@outputtable');
  Route::get('currenttable', 'PageController@currenttable');


  Route::post('post-input', 'InsertdateController@postinput'); 
  Route::post('post-output', 'InsertdateController@postout');
  Route::post('post-current', 'InsertdateController@postcurrent');