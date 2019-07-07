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
Auth::routes();

Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['module' => 'community'], function () {
        Route::resource('community', 'CommunityController');
    });

    Route::group(['module' => 'deed'], function () {
        Route::resource('deed/batch', 'BatchDeedController');
        Route::get('deed/import', 'DeedController@import')->name('deed.import');
        Route::resource('deed', 'DeedController');
    });

    Route::group(['module' => 'help'], function () {
        Route::get('help', 'HelpController@index')->name('help.index');
    });

    Route::group(['module' => 'region'], function () {
        Route::get('region/{province?}/{town?}', 'RegionController@region');
    });
});

// 产权查询也没
Route::group(['prefix' => 'front', 'namespace' => 'Front'], function () {
    Route::get('h5/query', 'DefaultController@index');
});
