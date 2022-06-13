<?php

use Illuminate\Support\Facades\Route;

/*
 | user route
 | routes are loaded by the RouteServiceProvider
*/

Route::get('/list', 'Main\UserController@index')->name('users.list');
Route::get('create/{user?}', 'Main\UserController@create')->name('users.create');
Route::get('edit/{user}', 'Main\UserController@edit')->name('users.edit');
Route::post('store/{user?}', 'Main\UserController@store')->name('users.store');
Route::get('delete/{user?}', 'Main\UserController@destroy')->name('users.delete');