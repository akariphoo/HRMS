<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

?>
