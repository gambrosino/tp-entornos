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
    return view('index');
});

Route::get('/eventos', 'EventController@index')->name('events');

Route::get('/eventos/{event}', 'EventController@show')->name('events.show');

Route::post('/attendants', 'AttendantController@store')->name('attendants.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
