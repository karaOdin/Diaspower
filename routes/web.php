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

Route::get('/hotels', function () {
    return view('hotels');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes(['verify' => true]);
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//cars section

Route::get('/cars','CarController@index')->name('cars.index');
Route::get('/cars/{slug}','CarController@show')->name('cars.show');

//car reservaion



Route::post('/reservation/','ReservationController@store')->name('reservation.store')->middleware('auth');
Route::get('/reservation/','ReservationController@index')->name('reservation.index')->middleware('auth');
Route::delete('/reservation/{id}','ReservationController@destroy')->name('reservation.destroy')->middleware('auth');


