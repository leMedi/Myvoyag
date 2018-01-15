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

Route::get('/', 'HomeController@index');

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
Route::get('/users', 'UserController@index');

/* Profile */

Route::get('/profile', 'UserController@profile');
Route::post('/profile/changePassword','UserController@changePassword');
Route::post('/profile/avatar','UserController@updateAvatar');
Route::get('/profile/edit/', 'UserController@editProfile');
Route::post('/profile/update', 'UserController@updateProfile');



/* Sites */

Route::get('/sites', 'SiteController@index');
Route::get('/sites/{site}', 'SiteController@show');
Route::get('/sites/edit/{site}', 'SiteController@edit');
Route::post('/sites/{site}', 'SiteController@update');
Route::post('/sites', 'SiteController@store');
Route::delete('/sites/{site}', 'SiteController@destroy');



/* Users */

Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/edit/{user}', 'UserController@edit');
Route::post('/users/{user}', 'UserController@update');
Route::get('/useradd', 'UserController@userAdd');
Route::post('/users', 'UserController@store');
Route::delete('/users/{user}', 'UserController@destroy');


Route::get('/useradd/listResponsable/','UserController@listResponsable');
Route::get('/useradd/listDirecteur/','UserController@listDirecteur');

