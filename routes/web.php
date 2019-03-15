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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/team', 'TeamController');
Route::get('/team/my', 'TeamController@getMyTeams');
Route::get('/team/{team}/member/{user}/toggle', 'TeamController@toggleMember');
Route::get('/team/{team}/members', 'TeamController@getMembers');
Route::get('/team/{team}/todos', 'TodoController@getTodosFromTeam');
Route::post('/team/{team}/todos', 'TodoController@create');
Route::post('/team/{team}/todo/{todo}/reply', 'ReplyController@create');
Route::post('/team', 'TeamController@store');
Route::get('/init', 'TodoController@init');
