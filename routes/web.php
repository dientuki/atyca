<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home')->with('selected','home');
})->name('home');

Route::get('/destino/{slug}.html', array('as' => 'destinations.show', 'uses' => 'DestinationsController@show'));
Route::get('/{slug}.html', array('as' => 'pages.show', 'uses' => 'PagesController@show'));