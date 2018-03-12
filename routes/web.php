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

Route::get('/eventos/crear', 'EventController@create')->name('events.create');

Route::post('/eventos/crear', 'EventController@store')->name('events.store');

Route::get('/eventos/{event}', 'EventController@show')->name('events.show');

Route::get('/eventos/{event}/edit', 'EventController@edit')->name('events.edit');

Route::patch('/eventos/{event}/update', 'EventController@update')->name('events.update');

Route::delete('/eventos/{event}', 'EventController@destroy')->name('events.destroy');

Route::post('/attendants', 'AttendantController@store')->name('attendants.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
