<?php

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

 
Route::get('/', 'FuelController@listfuel')->name('fuel.listfuel');

Route::get('/home', 'HomeController@index')->name('home');
 

Route::get('about.html', function () {
   return view('HomePage.about');
});
 

Route::get('contact.html', function () {
   return view('HomePage.contact');
});

 
 
// Rotue qu?n lý dang nh?p, dung xu?t
Auth::routes(); // login, register
// client

Route::put('/user/{user}', 'UserController@update'); // update 


Route::group(['middleware' => ['auth']] , function(){
	Route::get('/user/{user}/edit', 'UserController@edit')->name('user.editus');
	Route::resource('fuelquote', 'FuelquoteController');
	Route::get('fuelquote/delete/{fuelquote}', 'FuelquoteController@delete');
});


//quan ly fuel
Route::group(['middleware' => ['auth','Checkadmin'],'prefix'=>'admin'] , function(){
	Route::resource('fuel', 'FuelController');
	Route::get('fuel/delete/{fuel}', 'FuelController@delete');
});

