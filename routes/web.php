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

Route::get('/index', function (){
	return view('cricket.index');
	
});

Route::get('/gallery', function (){
	return view('cricket.gallery');
	
});

Route::get('/contact-us', function (){
	return view('cricket.contact-us');
	
});
Route::get('/about-us', function (){
	return view('cricket.about-us');
	
});



Auth::routes();

Route::get('/dashboard', 'HomeController@index');
