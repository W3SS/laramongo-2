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



Route::get('/',['as' => 'project.index', 'uses' => 'ProjectController@index']);
Route::get('/create',['as' => 'project.create', 'uses' => 'ProjectController@create']);
Route::post('/create',['as' => 'project.store', 'uses' => 'ProjectController@store']);