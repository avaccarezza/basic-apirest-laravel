<?php

use Illuminate\Support\Facades\Route;

Route::resource('restaurants', 'App\Http\Controllers\RestaurantController');

//Route::get('/restaurants', 'App\Http\Controllers\RestaurantController@index');
//Route::post('/restaurants', 'App\Http\Controllers\RestaurantController@store');
//Route::get('/restaurants/{restaurant}', 'App\Http\Controllers\RestaurantController@show');
//Route::put('/restaurants/{restaurant}', 'App\Http\Controllers\RestaurantController@update');
//Route::delete('/restaurants/{restaurant}', 'App\Http\Controllers\RestaurantController@destroy');

