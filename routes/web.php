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


Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::post('/task', 'TaskController@store');
Route::get('/delete/{id}', 'TaskController@getdelete');
