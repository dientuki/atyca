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

use App\Mail\EmailTest;
use Illuminate\Support\Facades\Mail;

Route::get('/', array('as' => 'newhome', 'uses' => 'HomeController@newhome'));
Route::get('/old-home.html', array('as' => 'home', 'uses' => 'HomeController@show'));
Route::get('/clientes-exterior.html', array('as' => 'contactus-world.show', 'uses' => 'ContactusController@showW'));
Route::post('/clientes-exterior.html', array('as' => 'contactus-world.send', 'uses' => 'ContactusController@sendW'));

Route::get('/clientes-argentina.html', array('as' => 'contactus-ar.show', 'uses' => 'ContactusController@showAR'));
Route::post('/clientes-argentina.html', array('as' => 'contactus-ar.send', 'uses' => 'ContactusController@sendAR'));
/*
Route::get('/', function () {
    return view('home')->with('selected','home');
})->name('home');*/

Route::group(['namespace' => 'UserLogged',
              'prefix' => 'private',
              'middleware' => ['auth'],
              'as' => 'private::'], function() {

    Route::get('/tarifario.html', function () {
        return view('private.tarifario')->with('selected','home');
    })->name('tarifario');

    Route::get('mi-perfil.html', ['uses' => 'UserController@edit', 'as' => 'edit']);
    Route::match(['put', 'patch'], 'update-profile/{user}', ['uses' => 'UserController@update', 'as' => 'update']);

    Route::get('destroy', ['uses' => 'UserController@destroy', 'as' => 'destroy']);
});

Route::group(['prefix' => 'api'], function() {

    Route::get('/', array('as' => 'services', 'uses' => 'ServicesController@notHere'));

    Route::get('/countries', array('as' => 'services::countries', 'uses' => 'ServicesController@countries'));

});

Route::get('/testmail', function () {
    Mail::to('dientuki@gmail.com')->send(new EmailTest());
    return view('home')->with('selected','home');
});

/*
Route::get('/tarifario.html', function () {
    return view('private.tarifario')->with('selected','home');
})->name('tarifario');
*/


Route::get('/excursion/{slug}.html', array('as' => 'excursions.show', 'uses' => 'ExcursionsController@show'));
Route::get('/destino/{slug}.html', array('as' => 'destinations.show', 'uses' => 'DestinationsController@show'));

Route::get('/{slug}.html', array('as' => 'pages.show', 'uses' => 'PagesController@show'));


Route::group(['prefix' => 'user',
              'middleware' => ['web'],
              'as' => 'user::'], function() {

    // Login Routes...
    Route::get('login.html', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login.html', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    // Registration Routes...
    Route::get('registro.html', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('registro.html', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);
    Route::get('registrado.html', ['as' => 'registred', 'uses' => 'Auth\RegisterController@showRegistratedInfo']);

    // Password Reset Routes...
    Route::get('password/reset.html', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
});


Route::group(['namespace' => 'Admin',
              'prefix' => 'admin',
              'middleware' => ['auth', 'can:admin'],
              'as' => 'admin::'], function() {

    //Dashboard
    Route::get('dashboard.html', ['uses' => 'ShowDashboard', 'as' => 'dashboard']);

    //Users
    Route::group(['prefix' => 'users',
        'as' => 'users::'], function(){

        Route::get('create', ['uses' => 'UsersController@create', 'as' => 'create']);
        Route::post('', ['uses' => 'UsersController@store', 'as' => 'store']);

        Route::get('{users}/edit', ['uses' => 'UsersController@edit', 'as' => 'edit']);
        Route::match(['put', 'patch'], '{users}', ['uses' => 'UsersController@update', 'as' => 'update']);

        Route::get('{users}/destroy', ['uses' => 'UsersController@destroy', 'as' => 'destroy']);

        Route::get('{users}/toogle', ['uses' => 'UsersController@toogle', 'as' => 'toogle']);
        Route::match(['get', 'put', 'patch'], '{users}/activate', ['uses' => 'UsersController@activate', 'as' => 'activate']);
        Route::match(['put', 'patch'], '{users}/deactivate', ['uses' => 'UsersController@deactivate', 'as' => 'deactivate']);

    });

});