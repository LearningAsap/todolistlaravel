<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todolistcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\http\controllers\todolistcontroller@index');
Route::get('todos/create', 'App\http\controllers\todolistcontroller@create');
Route::post('/edit', 'App\http\controllers\TodoListController@edit');
Route::post('/todos', 'App\http\controllers\TodoListController@store');
Route::post('/update/{id}', 'App\Http\Controllers\TodoListController@update');
Route::delete('/todo/{id}', 'App\Http\Controllers\TodoListController@destroy')->name('todo.destroy');
Route::resource('todo', 'App\http\controllers\todolistcontroller');
