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

Route::group(['prefix' => 'sys'], function () {
    Route::get('init',          'DefaultController@init');          // 基础数据
    Route::get('query',         'DefaultController@deedQuery');     // 产权查询
    Route::get('communities',   'DefaultController@communities');   // 小区列表
});
