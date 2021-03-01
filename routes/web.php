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

Route::group(['prefix' => 'admin'], function() {
    Route::get('XXX', 'AAAController＠bbb');
    Route::get('adomin/profile/create', 'ProfileController@Action');
    Route::get('adomin/profile/edit', 'ProfileController@Action');
    });