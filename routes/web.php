<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Drying Methods
Route::get('/drying-methods', 'DryingMethodController@index')->name('getDryingMethods');
Route::get('/drying-methods/create', 'DryingMethodController@create')->name('createDryingMethod');
Route::post('/drying-methods/store', 'DryingMethodController@store')->name('storeDryingMethod');
Route::get('/drying-methods/{id}/edit', 'DryingMethodController@edit')->name('editDryingMethod');
Route::post('/drying-methods/{id}/update', 'DryingMethodController@update')->name('updateDryingMethod');
Route::get('/drying-methods/delete/{id}', 'DryingMethodController@destroy')->name('deleteDryingMethod');
Route::get('/drying-methods/{id}', 'DryingMethodController@show')->name('getDryingMethod');

//Products
// Route::get('/marketplace', 'DryingMethodController@index')->name('getProducts');
// Route::get('/marketplace/create', 'DryingMethodController@create')->name('createDryingMethod');
// Route::post('/marketplace/store', 'DryingMethodController@store')->name('storeDryingMethod');
// Route::get('/marketplace/{id}/edit', 'DryingMethodController@edit')->name('editDryingMethod');
// Route::post('/marketplace/{id}/update', 'DryingMethodController@update')->name('updateDryingMethod');
// Route::get('/marketplace/delete/{id}', 'DryingMethodController@destroy')->name('deleteDryingMethod');
// Route::get('/marketplace/{id}', 'DryingMethodController@show')->name('getDryingMethod');
//Treatments
Route::get('/treatments', 'TreatmentController@index')->name('getTreatments');
Route::get('/treatments/create', 'TreatmentController@create')->name('createTreatment');
Route::post('/treatments/store', 'TreatmentController@store')->name('storeTreatment');
Route::get('/treatments/{id}/edit', 'TreatmentController@edit')->name('editTreatment');
Route::post('/treatments/{id}/update', 'TreatmentController@update')->name('updateTreatment');
Route::get('/treatments/delete/{id}', 'TreatmentController@destroy')->name('deleteTreatment');
Route::get('/treatments/{id}', 'TreatmentController@show')->name('getTreatment');
//Species
Route::get('/species', 'SpeciesController@index')->name('getSpecies');
Route::get('/species/create', 'SpeciesController@create')->name('createSpecies');
Route::post('/species/store', 'SpeciesController@store')->name('storeSpecies');
Route::get('/species/{id}/edit', 'SpeciesController@edit')->name('editSpecies');
Route::post('/species/{id}/update', 'SpeciesController@update')->name('updateSpecies');
Route::get('/species/delete/{id}', 'SpeciesController@destroy')->name('deleteSpecies');
Route::get('/species/{id}', 'SpeciesController@show')->name('getSpecies');
//GradingSystems
Route::get('/grading-systems', 'GradingSystemController@index')->name('getGradingSystems');
Route::get('/grading-systems/create', 'GradingSystemController@create')->name('createGradingSystems');
Route::post('/grading-systems/store', 'GradingSystemController@store')->name('storeGradingSystems');
Route::get('/grading-systems/{id}/edit', 'GradingSystemController@edit')->name('editGradingSystems');
Route::post('/grading-systems/{id}/update', 'GradingSystemController@update')->name('updateGradingSystems');
Route::get('/grading-systems/delete/{id}', 'GradingSystemController@destroy')->name('deleteGradingSystems');
Route::get('/grading-systems/{id}', 'GradingSystemController@show')->name('getGradingSystems');
//Grafes
Route::get('/grades', 'GradeController@index')->name('getGrades');
Route::get('/grades/create', 'GradeController@create')->name('createGrades');
Route::post('/grades/store', 'GradeController@store')->name('storeGrades');
Route::get('/grades/{id}/edit', 'GradeController@edit')->name('editGrades');
Route::post('/grades/{id}/update', 'GradeController@update')->name('updateGrades');
Route::get('/grades/delete/{id}', 'GradeController@destroy')->name('deleteGrades');
Route::get('/grades/{id}', 'GradeController@show')->name('getGrades');
