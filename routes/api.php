<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api', 'middleware' => 'throttle:120,1'], function () {
    Route::get('query',             'DefaultController@deedQuery');         // 查询
    Route::get('communities',       'DefaultController@communities');   // 小区选择
});
