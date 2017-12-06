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

Route::get('/', 'HomeController@index')->name('home');

//go to registration page
Route::get('/register', 'RegistrationController@create');

//TODO: Store the data in the database
Route::post('/register', 'RegistrationController@store');

//go to sign in page controller
Route::get('/login', 'SessionsController@create');

//sign in logic
Route::post('/login', 'SessionsController@store');

//logout logic
Route::get('/logout', 'SessionsController@destroy');

Route::get('/addAlumni', 'EntriesController@create');

