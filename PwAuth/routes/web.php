<?php

use Illuminate\Support\Facades\Route;

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

//Accounts
Route::get('/account', 'AccountController@index');


//Accounts/Projects
Route::get('/account/projects', 'ProjectController@index');
Route::get('/account/projects/create', 'ProjectController@create');
Route::post('/account/projects', 'ProjectController@store');
Route::get('/account/projects/{id}', 'ProjectController@show');
Route::get('/account/projects/{id}/edit', 'ProjectController@edit');
Route::put('/account/projects/{id}', 'ProjectController@update');
Route::get('/account/projects/{id}/delete', 'ProjectController@destroy');


//Pages
Route::get('/', 'PageController@index');

Route::post('/results', 'PageController@result');

Route::get('/search', 'PageController@index');

Route::get('/search/{keyword}', 'PageController@search');


//Images
Route::get('/projects/images/{image_info}/add', 'ImageController@create')->middleware('auth');
Route::get('/projects/images/{image_info}/delete', 'ImageController@destroy')->middleware('auth');




Auth::routes();