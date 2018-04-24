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

Route::group(['prefix' => 'testing1'], function () {

	Route::get('/branchio1', function () { 
	    return view('brnach io web design layout testing.webdesign_branchio');
	});
	Route::get('/branchio2', function () { 
	    return view('brnach io web design layout testing.testing');
	});
});