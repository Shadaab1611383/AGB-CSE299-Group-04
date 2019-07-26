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

Route::get('/complaint', 'ComplaintController@showComplainFrom')->name('complain');
Route::post('/complaint/submit', 'ComplaintController@saveComplaint')->name('complaint.save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');