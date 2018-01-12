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

/* CrediCards */
Route::post('/creditcards', 'CreditCardController@store');
Route::delete('/creditcards/{creditCard}', 'CreditCardController@destroy');

Route::get('/login', function () {
    return view('login');
});



Route::get('/table', function () {

    return view('table');
});

Auth::routes();
Route::get('/profile', 'UserController@profile');
Route::get('/users', 'UserController@index');




