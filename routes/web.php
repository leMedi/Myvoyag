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
Route::get('/hotels/{hotel}', 'HotelController@show');
Route::get('/hotels/edit/{hotel}', 'HotelController@edit');
Route::post('/hotels/{hotel}', 'HotelController@update');
Route::post('/hotels', 'HotelController@store');
Route::delete('/hotels/{hotel}', 'HotelController@destroy');

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


/* Sites */

Route::get('/sites', 'SiteController@index');
Route::get('/sites/{site}', 'SiteController@show');
Route::get('/sites/edit/{site}', 'SiteController@edit');
Route::post('/sites/{site}', 'SiteController@update');
Route::post('/sites', 'SiteController@store');
Route::delete('/sites/{site}', 'SiteController@destroy');



