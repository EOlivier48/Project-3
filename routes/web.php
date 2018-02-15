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
    return view('index');
});

Route::get('/api/states','StatesController@index');

Route::get('/api/states/{id}','StatesController@show');

Route::get('/api/people','PeopleController@index');

Route::post('/api/people','PeopleController@store');

Route::get('/api/people/{id}','PeopleController@show');

Route::get('/api/people/{id}/visits','VisitsController@showVisitsForPerson');

Route::get('/api/visits','VisitsController@index');

Route::post('/api/visits','VisitsController@store');

Route::get('/api/visits/{id}','VisitsController@show');
