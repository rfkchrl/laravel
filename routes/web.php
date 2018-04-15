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

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/diklat', function () {
    return view('contact');
});


//Route::get('/about', function () {
//    echo 'about me and you';
//});

Route::get("teman/{name}/{tim}",function ($name,$tim){
	return 'Hello teman '.$name .
		   ' tim ' .$tim ;
});


Route::get("home/about",'HomeController@about');

//Route::resource("barang",'BarangController');
Route::resource("brg",'BrgController');

