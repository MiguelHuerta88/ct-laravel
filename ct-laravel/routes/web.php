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
    return view('welcome');
});

Route::get('tasks/', 'TasksController@index')->name('tasks');
Route::post('create/task', 'TasksController@create')->name('task.create');
Route::get('/edit/task/{tasks}', 'TasksController@edit')->name('task.edit');
Route::post('/edit/task/{tasks}', 'TasksController@update')->name('task.update');
