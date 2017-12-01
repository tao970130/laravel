<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('login/index','LoginController@index');
Route::any('login/login','LoginController@login');
Route::any('schedule/index','ScheduleController@index');
Route::any('schedule/add','ScheduleController@add');
Route::any('schedule/queue','ScheduleController@queue');