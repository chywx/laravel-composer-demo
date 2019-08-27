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
//    return bcrypt('123456');
//    return "123456";
});

Route::get('/student/test1','StudentController@test1');
Route::get('/student/test2','StudentController@test2');

Route::get('/student/select1','StudentController@select1');

Route::get('/student/event1','StudentController@event1');


