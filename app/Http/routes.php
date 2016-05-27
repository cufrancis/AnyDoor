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

Route::get('/', 'IndexController@index');

// 新增导航链接
Route::get('/add', 'LinkController@create');
Route::post('/add', 'LinkController@store');

// 新增分类
Route::get('/type/add', 'TypeController@create');
Route::post('/type/add', 'TypeController@store');
