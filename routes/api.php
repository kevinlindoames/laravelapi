<?php

use Illuminate\Support\Facades\Route;

Route::post('login','LoginController@authenticate');

Route::get('user/index','UserController@index');

Route::post('user/create','UserController@create');

Route::post('user/show','UserController@show');

Route::put('user/update','UserController@update');

Route::delete('user/delete', 'UserController@delete');