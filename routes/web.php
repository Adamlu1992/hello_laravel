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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/signup', 'UsersController@create')->name('signup'); //注册
Route::resource('users', 'UsersController');
//上面一行代码将等同于：
// Route::get('/users', 'UsersController@index')->name('users.index');//显示所有用户列表
// Route::get('/users/create', 'UsersController@create')->name('users.create');//创建用户的页面
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');//显示用户个人信息
// Route::post('/users', 'UsersController@store')->name('users.store');//创建用户
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');//编辑用户个人资料
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');//更新用户
// Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');//删除用户
Route::get('login', 'SessionsController@create')->name('login'); //显示登录页面
Route::post('login', 'SessionsController@store')->name('login'); //创建新会话
Route::delete('logout', 'SessionsController@destroy')->name('logout');//销毁会话
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');//激活邮箱

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
