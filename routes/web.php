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

use Illuminate\Support\Facades\Route;

Route::get('/l', function () {
    return view('home');
});

Route::get('/l/about' , function(){
    return view('about');
});
Route::get('/l/account' , function(){
    return view('account');
});

Route::get('/l/product/1' , function (){
    return view('productDetails');
});
Route::get('/l/flowers' , function (){
    return view('flowers');
})->name('flowerProducts');
Route::get('/l/flowers/box' , function (){
    return view('flowersBox');
})->name('flowersBox');


Route::get('/l/checkout', function(){
    return view('checkout');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('auth/{provider}', 'AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');




Route::get('/', function () {
    return view('wait');
});