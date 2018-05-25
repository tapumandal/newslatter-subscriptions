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

Auth::routes();

// Route::get('/subscriber/list', 'SubscriberController@index')->name('home');

// Route::resource('newslatter/subscribe/list', 'NewsLatterSubscription');
// Route::resource('newslatter/create', 'NewsLatterSubscription');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('/newslatters', 'NewsLatterSubscription');
});

Route::post('/newslatters', 'NewsLatterSubscription@store');