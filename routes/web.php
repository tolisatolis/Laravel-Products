<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/drying-methods', 'DryingMethodController@index');
// Route::get('/drying-methods/{id}', 'DryingMethodController@show')->where(array('id' => '[0-9]'));
Route::get('/marketplace', 'DryingMethodController@index');
Route::get('/marketplace/{id}', 'DryingMethodController@show')->where(array('id' => '[0-9]'));
Route::get('/treatments', 'DryingMethodController@index');
Route::get('/species', 'DryingMethodController@index');
Route::get('/grading-systems', 'DryingMethodController@index');
Route::get('/grades', 'DryingMethodController@index');
