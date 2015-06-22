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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('create/form', 'WorkerController@index');
Route::get('worker/{id}', 'WorkerController@show');
Route::get('remove/worker/{id}', 'WorkerController@destroy');
Route::get('edit/worker/{id}', 'WorkerController@edit');
Route::post('create/worker', 'WorkerController@create');

Route::get('rate/schema', 'RateController@index');
Route::post('create/block', 'RateController@create');

Route::get('remove/report/{id}', 'ReportController@destroy');
Route::get('science/delete/{id}', 'RateController@destroy_science');
Route::get('method/delete/{id}', 'RateController@destroy_method');
Route::get('orgs/delete/{id}', 'RateController@destroy_orgs');

Route::get('create/report/{id}', 'ReportController@index');
Route::get('edit/report/{id}/{unit}', 'ReportController@edit');
Route::post('show/list', 'ReportController@show');
Route::post('create/report', 'ReportController@create');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
