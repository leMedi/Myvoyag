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
    return view('welcome');
});

/////////
//= Admin
/////

/* Hotels */
Route::get('/hotels', 'HotelController@index');
Route::post('/hotel', 'HotelController@store');
Route::delete('/hotel/{hotel}', 'HotelController@destroy');

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/table', function () {

    return view('table');
});

Auth::routes();

Route::get('/users', 'UserController@index');




