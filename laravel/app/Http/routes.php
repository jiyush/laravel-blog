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

Route::get('/', 'mycontroller@index'
);

Route::get('post','postcontroller@index');
Route::post('post/insert', 'postcontroller@insert');
Route::get('post/show', 'postcontroller@show');
Route::get('post/edit', 'postcontroller@edit');
