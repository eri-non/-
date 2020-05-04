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

Route::get('XXX', 'Admin\NewsController@add');

Route::group(['prefix' => 'admin'], function(){
    Route::get('news/admin', 'Admin\NewsController@adit');
    Route::get('profile/profile', 'Admin\ProfileController@adit');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});

