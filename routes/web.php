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



Route::get('/',['as' => 'developer.index', 'uses' => 'DeveloperController@index']);

Route::get('/create',['as' => 'developer.create', 'uses' => 'DeveloperController@create']);

Route::post('/developer/create','DeveloperController@store');

Route::get('/developer/search',['as' => 'developer.search', 'uses' => 'DeveloperController@searchPage']);

Route::get('/developer/search1',['as' => 'developer.search1', 'uses' => 'DeveloperController@searchByProgramming']);

Route::post('/developer/search1', 'DeveloperController@searchForProgramming');

Route::get('/developer/search2',['as' => 'developer.search2', 'uses' => 'DeveloperController@searchByBoth']);

Route::post('/developer/search2', 'DeveloperController@searchForBoth');

Route::post('/queries', 'DeveloperController@query');