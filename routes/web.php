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

Route::view('/','welcome');

Route::get('/', function() {
    return view('welcome');
})->name('/');

Route::get('/hotels', function() {
    return view('searchHotel');
})->name('hotels');

Route::get('/events', function() {
    return view('specialEvents');
})->name('events');

Route::get('/switchinfo/{rating}/{hotelName}',[
    'uses' => 'ReviewController@saveRating',
])->name('saveReview');

Route::get('/switchinfo/{hotelName}/{city}',[
    'uses' => 'HotelController@reserve',
])->name('saveReview');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/search', 'searchHotel');




Route::get('/Kaunas', 'CityController@Kaunas')->name('Kaunas');

Route::get('/Klaipeda', 'CityController@Klaipeda')->name('Klaipeda');

Route::get('/Vilnius','CityController@Vilnius')->name('Vilnius');

Route::get('/Alytus', 'CityController@Alytus')->name('Alytus');

Route::get('/Panevezys', 'CityController@Panevezys')->name('Panevezys');

Route::get('/Siauliai', 'CityController@Siauliai')->name('Siauliai');