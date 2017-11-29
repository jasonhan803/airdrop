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

Route::get('/', 'AirdropController@index');

Route::post('/register', 'AirdropController@register');

Route::post('/login_check', 'AirdropController@admin_login_check');

Route::get('/dashboard', 'AirdropController@dashboard');

Route::post('/telegramusers', 'AirdropController@telegramUsers');

Route::post('/verifyTelegramUser', 'AirdropController@verifyTelegram');

Route::post('/verifyTwitterUser', 'AirdropController@verifyTwitter');

Route::get('/login', 'AirdropController@login');

Route::get('/logout', 'AirdropController@logout');

