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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/impressum', function () {
    return view('impressum');
});

Route::get('/protection', function () {
    return view('protection');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/employer-overview', function () {
    return view('employer-overview');
});

Route::get('/employer-planning', function () {
    return view('employer-planning');
});

Route::get('/employer-account', function () {
    return view('employer-account');
});

Route::get('/employer-planning-single-employee', function () {
    return view('employer-planning-single-employee');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
