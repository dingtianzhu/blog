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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'Home\IndexController@index');
    Route::get('/cate/{cate_id}', 'Home\IndexController@cate');
    Route::get('/a/{art_id}', 'Home\IndexController@article');

    Route::any('admin/login', 'Admin\LoginController@login');
    Route::get('admin/code', 'Admin\LoginController@code');
});

// Route::any('admin/login', 'Admin\LoginController@login');
// Route::get('admin/code', 'Admin\LoginController@code');

Route::group(['middleware'=>['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('logout', 'LoginController@logout');
    Route::any('setpass', 'IndexController@setpass');
    Route::resource('category','CategoryController');
    Route::post('cate/changeorder', 'CategoryController@changeOrder');
    Route::resource('article', 'ArticleController');

    Route::post('links/changeorder', 'LinksController@changeOrder');
    Route::resource('links', 'LinksController');

    Route::post('navs/changeorder', 'NavsController@changeOrder');
    Route::resource('navs', 'NavsController');

    Route::get('config/putfile', 'ConfigController@putFile');
    Route::post('config/changecontent', 'ConfigController@changeContent');
    Route::post('config/changeorder', 'ConfigController@changeOrder');
    Route::resource('config', 'ConfigController');

    Route::any('upload', 'CommonController@upload');
    Route::get('img', 'AlwaysController@img');
    Route::get('list', 'AlwaysController@list');
    Route::get('element', 'AlwaysController@element');
    Route::get('tab', 'AlwaysController@tab');
    Route::get('add', 'AlwaysController@add');

});



