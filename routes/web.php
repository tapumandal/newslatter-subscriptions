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

Route::group(['middleware' => 'auth'], function () {
	Route::get('/newslattersubscribers/export', 'NewsLatterSubscription@export')->name('export_subscriber');
	Route::resource('/newslattersubscribers', 'NewsLatterSubscription');

});

Route::post('/newslattersubscribers', 'NewsLatterSubscription@store');