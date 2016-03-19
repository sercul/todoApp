<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return View::make('index');
});

Route::get('/task', 'TaskController@index');
Route::get('/api/task', 'TaskController@index');
Route::post('/api/task', 'TaskController@store');
Route::get('/api/task/done/{id}', 'TaskController@done');
Route::delete('/api/task/{id}', 'TaskController@destroy');