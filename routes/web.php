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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/resume', 'HomeController@resume')->name('resume');
Route::get('/resume-view', 'HomeController@resumeview')->name('resume.view');
Route::get('/privacy-policy', 'HomeController@privacypolicy')->name('privacy');

Route::get('/contact', 'ContactUSController@contactUS')->name('contact');
Route::post('/contact-us', 'ContactUSController@send')->name('contactus');
