<?php

Route::group(['namespace'=>'Admin'],function (){

    // 登陆页面
    Route::get('/','LoginController@index');
    Route::get('/login',['as' => 'login', 'uses' => 'LoginController@index']);

    // 后台首页
    Route::get('/index',['as' => 'index', 'uses' => 'IndexController@index']);

    // --------后台用户模块---------

    // 用户首页
    Route::get('/user',['as' => 'user', 'uses' => 'UserController@index']);

});
