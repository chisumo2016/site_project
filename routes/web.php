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
    return view('pages.index');
});

Route::get('/', function () {
    return view('pages.aboutus');
});

Route::get('/', function () {
    return view('pages.services');
});


Route::get('/', function () {
    return view('pages.portifolio');
});


Route::get('/', function () {
    return view('pages.client');
});

Route::get('/', function () {
    return view('pages.team');
});

//Route::get('/', function () {
//    return view('pages.contact');
//});


