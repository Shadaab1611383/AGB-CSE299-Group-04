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
})->name('dashboard');

Route::get('/projects/current-projects', 'CprojectController@ShowToUsers')->name('cprojects.show');
Route::get('/projects/aacomplaint', 'AacomplaintsController@FrontAa')->name('aacomplaint.show');




Route::get('/complaint', 'ComplaintController@showComplainFrom')->name('complain');
Route::post('/complaint/submit', 'ComplaintController@saveComplaint')->name('complaint.save');

Route::get('/cproj', 'HomeController@showCproj')->name('cproj');
Route::post('/cproj/submit', 'HomeController@saveCproj')->name('cproj.save');

Route::get('/aacomplaint', 'HomeController@index')->name('agc');
Route::post('/aacomplint/submit', 'HomeController@saveAAcomplaint')->name('aacomplaint.save');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
