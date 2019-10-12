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

Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');


Route::middleware('auth')->group(function() {
	Route::get('/projects', 'ProjectsController@index')->middleware('auth');
	Route::get('/projects/add', 'ProjectsController@create');
	Route::post('/projects/store', 'ProjectsController@store');
	Route::get('/projects/{project}', 'ProjectsController@show');
	Route::get('/projects/{project}/edit', 'ProjectsController@edit');
	Route::post('/projects/{project}/update', 'ProjectsController@update');
	Route::get('/projects/{project}/tasks', 'TasksController@create');
	Route::get('/projects/tasks/{task}/edit', 'TasksController@edit');
	Route::post('/projects/tasks/{task}/update', 'TasksController@update');
	Route::post('/projects/{project}/tasks', 'TasksController@store');
	
});
