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

Route::get('send','MailController@send');
Route::get('/',[
	'as'=>'beestudy.home',
	'uses'=>'BeestudyController@home'
]);
Route::get('chinh-sach-bao-mat',[
	'as'=>'beestudy.chinhsachbaomat',
	'uses'=>'BeestudyController@chinhsachbaomat'
]);
Route::get('register','BeestudyController@register');
Route::get('dieukhoansudung','BeestudyController@dieukhoansudung');
Route::get('login','BeestudyController@login');
Route::get('thithu','BeestudyController@thithu');