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

Route::get('/profile', 'profileControler@index')->name('profile');
Route::get('/profile/editar/', 'profileControler@edit')->name('profile.edit');
Route::put('/profile/{customer?}', 'profileControler@update')->name('profile.update');

Route::get('/index', 'indexController@index')->name('index');

Route::get('shop', 'shopController@index')->name('shop');
Route::get('shop/{room?}', 'shopController@detail')->name('shop.detail');

Route::post('/cart_add', 'cartController@add')->name('cart.add');
Route::post('/cart_get', 'cartController@getCart')->name('cart.get');
Route::post('/cart_delete', 'cartController@delete')->name('cart.delete');

Route::get('/checkout', 'checkoutController@index')->name('checkout');
Route::post('/payment', 'checkoutController@payment')->name('checkout.payment');

Route::get('/logout', 'loginController@logout')->name('logout');

Route::get('/activate', 'registerController@activate')->name('activate');
/*
Route::fallback(function () {
    return view('error');
});*/

//ADMIN*****

Route::get('/admin/login', 'login_adminController@index')->name('login_admin');
Route::post('/admin/login', 'login_adminController@auth')->name('login_admin.auth');

Route::get('/admin/register', 'register_adminController@index')->name('register_admin');
Route::post('/admin/register', 'register_adminController@store')->name('register_admin.store');

Route::get('/admin/index', 'index_adminController@index')->name('index_admin');

Route::get('/logout_admin', 'login_adminController@logout')->name('logout_admin');

Route::get('/admin/users', 'users_adminController@index')->name('users_admin');
Route::get('/admin/users/editar/{admin?}', 'users_adminController@edit')->name('users_admin.edit');
Route::put('/admin/users/{admin?}', 'users_adminController@update')->name('users_admin.update');
Route::get('/admin/users/anular/{admin?}', 'users_adminController@destroy')->name('users_admin.destroy');
/*
Route::fallback(function () {
    return view('error_admin');
});*/