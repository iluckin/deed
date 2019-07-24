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
    Route::get('/', ['uses' => 'HomeController@index', 'module' => 'home', 'as' => 'home']);

    Route::group(['module' => 'community'], function () {
        Route::resource('community', 'CommunityController');
    });

    Route::group(['module' => 'deed'], function () {
        Route::get('deed/import', 'DeedController@import')->name('deed.import');
        Route::get('deed/import/template', 'DeedController@template')->name('deed.template');
        Route::get('car/import', 'CarController@import')->name('car.import');
        Route::get('car/import/template', 'CarController@template')->name('car.template');
        Route::resource('deed', 'DeedController');
        Route::resource('car', 'CarController');
    });

    Route::group(['module' => 'help'], function () {
        Route::get('help', 'HelpController@index')->name('help.index');
    });

    Route::group(['module' => 'cms'], function () {
        Route::resource('banner', 'BannerController');
        Route::resource('article', 'ArticleController');
    });

    Route::group(['module' => 'region'], function () {
        Route::get('region/{province?}/{town?}', 'RegionController@region');
    });
});

// 产权查询也没
Route::group(['prefix' => 'service/someone', 'namespace' => 'Front'], function () {
    Route::get('index', 'DefaultController@index')->name('service.someone.index');
    Route::get('deed', 'DefaultController@deed')->name('service.someone.deed');;
});
