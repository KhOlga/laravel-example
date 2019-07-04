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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'WelcomeController@welcome')->name('welcome');

/*Route::get('/', 'HomeController@index')->name('home');*/

Route::get('/profile', 'HomeController@dashboard')
    ->name('dashboard')
    /*->middleware('auth')*/;

/*Route::get('/', 'FrontEndController@home')->name('home');*/

Route::get('/{page}', 'FrontEndController@page');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
