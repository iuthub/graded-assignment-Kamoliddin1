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

Route::get('/', [
    'uses' => 'TasksController@getIndex',
    'as' => 'taskIndex'
]);

Route::post('/create', [
    'uses' => 'TasksController@createTask',
    'as' => 'create'
]);

Route::post('/edit', [
    'uses' => 'TasksController@editTask',
    'as' => 'edit',
]);


Route::post('/delete', [
    'uses' => 'TasksController@deleteTask',
    'as' => 'delete',
]);
