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


Route::get('/','BlogsController@index');
Route::get('/left', function () {
    return view('left');
});Route::get('/right', function () {
    return view('right');
});Route::get('/no', function () {
    return view('nosidebar');
});Route::get('/more_content','BlogsController@index1');