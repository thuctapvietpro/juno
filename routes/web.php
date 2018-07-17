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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});
	Route::get('logout','HomeController@getLogout');
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@getHome');
		
		//Account
		Route::group(['prefix'=>'account'],function(){
			Route::get('/','AccountController@getAccount');
			
			Route::get('add','AccountController@getAddAccount');
			Route::post('add','AccountController@postAddAccount');

			Route::get('edit/{id}','AccountController@getEditAccount');
			Route::post('edit/{id}','AccountController@postEditAccount');

			Route::get('delete/{id}','AccountController@getDeleteAccount');
		});
		
	});
});