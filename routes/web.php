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

Route::redirect('/', '/user/list');

Route::get('/user/list', 'UserController@list');
Route::get('/user/new', 'UserController@new');
Route::post('/user/new', 'UserController@insert');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/edit/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');