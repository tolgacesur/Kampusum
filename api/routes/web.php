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

Route::get('/', 'Main@get_index');

Route::group(['prefix'=>'/office'], function (){
	Route::get('/', 'Office@get_index');
});

Route::group(['prefix'=>'/student'], function (){
	Route::get('/', 'Student@get_index');
});

Route::group(['prefix'=>'/academic'], function(){
	Route::get('/', 'Academic@get_index');
});


