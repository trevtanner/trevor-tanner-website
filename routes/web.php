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
    return view('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/resume', 'HomeController@resume')->name('resume');
Route::get('/resume-view', 'HomeController@resumeview')->name('resume.view');

Route::get('/contact', 'ContactUSController@contactUS')->name('contact');
Route::post('/contact-us', 'ContactUSController@send');
