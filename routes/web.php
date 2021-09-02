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

Route::get('/', function () {
    return view('index');
});

Route::get('admin/login', 'Admin\AuthController@login')->name('admin.login.create');

Route::post('admin/login', 'Admin\AuthController@postLogin')->name('admin.login.post');

Route::get('admin/logout', 'Admin\AuthController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'DashbroadController@index')->name('admin.dashbroad');

    Route::group(['prefix' => 'accounts'], function() {
        Route::get('/', 'UserController@index')->name('admin.accounts.index');

        Route::get('create', 'UserController@create')->name('admin.accounts.create');

        Route::post('store', 'UserController@store')->name('admin.accounts.store');

        Route::get('show', 'UserController@show')->name('admin.accounts.show');

        Route::get('edit/{id}', 'UserController@edit')->name('admin.accounts.edit');

        Route::post('update/{id}', 'UserController@update')->name('admin.accounts.update');

        Route::get('change-password/{id}', 'UserController@getChangePassword')->name('admin.accounts.getChangePassword');
        
        Route::post('change-password/{id}', 'UserController@postChangePassword')->name('admin.accounts.postChangePassword');
    });
    
    Route::group(['prefix' => 'categories'], function() {
        Route::get('/', 'CategoryController@index')->name('admin.categories.index');

        Route::post('show', 'CategoryController@show')->name('admin.categories.show');

        Route::get('create', 'CategoryController@create')->name('admin.categories.create');

        Route::post('store', 'CategoryController@store')->name('admin.categories.store');

        Route::post('edit', 'CategoryController@edit')->name('admin.categories.edit');

        Route::post('update', 'CategoryController@update')->name('admin.categories.update');

        Route::post('delete', 'CategoryController@delete')->name('admin.categories.delete');
    });

    Route::group(['prefix' => 'sub-categories'], function() {
        Route::get('/', 'SubCategoryController@index')->name('admin.sub-categories.index');

        Route::post('show', 'SubCategoryController@show')->name('admin.sub-categories.show');

        Route::get('create', 'SubCategoryController@create')->name('admin.sub-categories.create');

        Route::post('store', 'SubCategoryController@store')->name('admin.sub-categories.store');

        Route::post('edit', 'SubCategoryController@edit')->name('admin.sub-categories.edit');

        Route::post('update', 'SubCategoryController@update')->name('admin.sub-categories.update');

        Route::post('delete', 'SubCategoryController@delete')->name('admin.sub-categories.delete');
    });
       
    Route::group(['prefix' => 'products'], function() {
        Route::get('/', 'ProductController@index')->name('admin.products.index');

        Route::post('show', 'ProductController@show')->name('admin.products.show');

        Route::get('create', 'ProductController@create')->name('admin.products.create');

        Route::post('store', 'ProductController@store')->name('admin.products.store');

        Route::get('edit/{id}', 'ProductController@edit')->name('admin.products.edit');

        Route::post('update/{id}', 'ProductController@update')->name('admin.products.update');

        Route::post('delete', 'ProductController@delete')->name('admin.products.delete');
    });

    Route::group(['prefix' => 'posts'], function() {
        Route::get('/', 'PostController@index')->name('admin.posts.index');

        Route::post('show', 'PostController@show')->name('admin.posts.show');

        Route::get('create', 'PostController@create')->name('admin.posts.create');

        Route::post('store', 'PostController@store')->name('admin.posts.store');

        Route::get('edit/{id}', 'PostController@edit')->name('admin.posts.edit');

        Route::post('update/{id}', 'PostController@update')->name('admin.posts.update');

        Route::post('delete', 'PostController@delete')->name('admin.posts.delete');
    });

    Route::group(['prefix' => 'post-groups'], function() {
        Route::get('/', 'PostGroupController@index')->name('admin.post-groups.index');

        Route::post('show', 'PostGroupController@show')->name('admin.post-groups.show');

        Route::get('create', 'PostGroupController@create')->name('admin.post-groups.create');

        Route::post('store', 'PostGroupController@store')->name('admin.post-groups.store');

        Route::post('edit', 'PostGroupController@edit')->name('admin.post-groups.edit');

        Route::post('update', 'PostGroupController@update')->name('admin.post-groups.update');

        Route::post('delete', 'PostGroupController@delete')->name('admin.post-groups.delete');
    });

    Route::group(['prefix' => 'banners'], function() {
        Route::get('/', 'BannerController@index')->name('admin.banners.index');

        Route::post('show', 'BannerController@show')->name('admin.banners.show');

        Route::get('create', 'BannerController@create')->name('admin.banners.create');

        Route::post('store', 'BannerController@store')->name('admin.banners.store');

        Route::get('edit/{id}', 'BannerController@edit')->name('admin.banners.edit');

        Route::post('update/{id}', 'BannerController@update')->name('admin.banners.update');

        Route::post('delete', 'BannerController@delete')->name('admin.banners.delete');
    });

    Route::group(['prefix' => 'shippers'], function() {
        Route::get('/', 'ShipperController@index')->name('admin.shippers.index');

        Route::post('show', 'ShipperController@show')->name('admin.shippers.show');

        Route::get('create', 'ShipperController@create')->name('admin.shippers.create');

        Route::post('store', 'ShipperController@store')->name('admin.shippers.store');

        Route::post('edit', 'ShipperController@edit')->name('admin.shippers.edit');

        Route::post('update', 'ShipperController@update')->name('admin.shippers.update');

        Route::post('delete', 'ShipperController@delete')->name('admin.shippers.delete');
    });
});


Route::group(['prefix' => 'products'], function() {
    Route::get('index', 'ProductController@index')->name('products.index');
    
    Route::get('show/{id}', 'ProductController@show')->name('products.show');
});



