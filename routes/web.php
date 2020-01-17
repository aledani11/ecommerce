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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'loginController@index')->name('login');
Route::post('/login', 'loginController@auth')->name('login.auth');

Route::get('/register', 'registerController@index')->name('register');
Route::post('/register', 'registerController@store')->name('register.store');

Route::get('/index', 'indexController@index')->name('index');

Route::get('/shop', 'shopController@index')->name('shop');
Route::get('/shop/{id}', 'shopController@detail')->name('shop.detail');

Route::post('/cart_add', 'cartController@add')->name('cart.add');

Route::get('/logout', 'loginController@logout')->name('logout');

Route::get('/activate', 'registerController@activate')->name('activate');