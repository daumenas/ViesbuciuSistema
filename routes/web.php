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

Route::get('/switchinfo/{rating}/{hotelName}/{city}',[
    'uses' => 'ReviewController@saveRating',
])->name('saveReview');


//hotel
Route::post('reservation', 'ReservationController@store');

Route::get('/reservation',function (){
   return view('reservationForm');
})->name('reservationForm');

Route::get('/userReservation',function (){
    return view('userReservation');
})->name('userReservation');

Route::get('/switchinfo/{hotelName}/{city}',[
    'uses' => 'ReservationController@store',
])->name('reserveHotel');

Route::get('/switchifo/{id}',[
    'uses' => 'HotelController@edit',
])->name('editHotel');

Route::get('/switchIfo/{id}',[
    'uses' => 'HotelController@delete',
])->name('DeleteHotel');

Route::post('addHotel', 'HotelController@store');

Route::get('redirectAddHotel', function (){
    return view('redirectAddHotel');
})->name('redirectAddHotel');

//user

Route::get('notification', 'UserController@notification');

Route::get('/switchinfo/{id}',[
    'uses' => 'UserController@edit',
])->name('editUser');

Route::get('/switchInfo/{id}',[
    'uses' => 'UserController@delete',
])->name('deleteUser');

Route::post('addUser', 'UserController@store');

Route::get('redirectAddUser', function (){
    return view('redirectAddUser');
})->name('redirectAddUser');

Route::get('/profile', function() {
    return view('userProfile');
})->name('profileUser');

Route::get('/editUser', function() {
    return view('userEditForm');
})->name('editUser');


// HOTEL OWNER

Route::get('/ownerHotel', function() {
    return view('ownerHotels');
})->name('ownerHotels');

Route::get('/ownerReservations', function() {
    return view('ownerReservations');
})->name('ownerReservations');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('allUsers', function () {

    return view('allUsers');
})->name('allUsers');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/search', 'searchHotel');




Route::get('/Kaunas', 'CityController@Kaunas')->name('Kaunas');

Route::get('/Klaipeda', 'CityController@Klaipeda')->name('Klaipeda');

Route::get('/Vilnius','CityController@Vilnius')->name('Vilnius');

Route::get('/Alytus', 'CityController@Alytus')->name('Alytus');

Route::get('/Panevezys', 'CityController@Panevezys')->name('Panevezys');

Route::get('/Siauliai', 'CityController@Siauliai')->name('Siauliai');