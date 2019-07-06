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
    return view('home');
});

Auth::routes();

// 产权查询也没
Route::group(['prefix' => 'front', 'namespace' => 'Front'], function () {
    Route::get('h5/query', 'DefaultController@index');
});
