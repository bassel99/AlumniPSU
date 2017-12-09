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

//Go to the page that user can create new alumni
// todo: make the admin on the same controller and method
Route::get('/addAlumni', 'EntriesController@create');

//create new alumni by the user, not the admin
Route::post('/addAlumni', 'EntriesController@store');

//display a message for the user who created the alumni telling him to wait
Route::get('/waitForApproval', 'ApproveAlumniController@wait');

//the admin view a specific request and decide to reject or accept
Route::get('/pendingAlumnus/{pendingalumnu}', 'ApproveAlumniController@review');

//view all pending alumnus
Route::get('/pendingAlumnus', 'ApproveAlumniController@viewAllPending');

//approve alumni or reject logic, what is between brackets {wildcard} must be the name of the argument in approve method
Route::post('/approveAlumni/{pendingalumnu}', 'ApproveAlumniController@approve');