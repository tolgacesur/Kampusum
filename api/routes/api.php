<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::get('/courseslist', function(Request $request){
	
	/*$courses = Courses::select('*') -> all();
	return response()->json($courses);*/
});

Route::post('/addcourse', 'Office@post_addCourse');
Route::post('/addstudent','Office@post_addStudent');
Route::post('/addstaff','Office@post_addStaff');
