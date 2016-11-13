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

Route::group(['prefix' => 'private',
              'middleware' => ['auth']], function() {

    Route::get('/tarifario.html', function () {
        return view('private.tarifario')->with('selected','home');
    })->name('tarifario');

});



Route::get('/destino/{slug}.html', array('as' => 'destinations.show', 'uses' => 'DestinationsController@show'));
Route::get('/{slug}.html', array('as' => 'pages.show', 'uses' => 'PagesController@show'));


Route::group(['prefix' => 'user',
              'middleware' => ['web']], function() {

    // Login Routes...
    Route::get('login.html', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login.html', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    // Registration Routes...
    Route::get('registro.html', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('registro.html', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);
    Route::get('registrado.html', ['as' => 'registred', 'uses' => 'Auth\RegisterController@showRegistratedInfo']);

    // Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
});


Route::group(['prefix' => 'admin',
    'middleware' => ['auth']], function() {

    Route::get('/tarifario.html', function () {
        return view('private.tarifario')->with('selected','home');
    })->name('tarifario');

});

