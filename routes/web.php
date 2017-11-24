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

Route::get('/dashboard', function(){
	return view('airdrop.dashboard');
});

Route::post('/telegramusers', 'AirdropController@telegramUsers');

Route::post('/verifyTelegramUser', 'AirdropController@verifyTelegram');