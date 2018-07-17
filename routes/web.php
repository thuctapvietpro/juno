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

	Route::group(['prefix'=>'login'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});
	Route::get('logout','HomeController@getLogout');
	Route::group(['prefix'=>'admin'],function(){
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
		//Comment
		Route::group(['prefix'=>'comment'],function(){
			Route::get('/','CommentController@getComment');
			Route::get('edit/{id}','CommentController@getEditComment');
			Route::post('edit/{id}','CommentController@postEditComment');

			Route::get('delete/{id}','CommentController@getDeleteComment');
		});
		//Category
		Route::group(['prefix'=>'category'],function(){
			Route::get('/','CategoryController@getCategory');
			
			Route::get('add','CategoryController@getAddCategory');
			Route::post('add','CategoryController@postAddCategory');
			
			
			Route::get('edit/{id}','CategoryController@getEditCategory');
			Route::post('edit/{id}','CategoryController@postEditCategory');

			Route::get('delete/{id}','CategoryController@getDeleteCategory');
		});
		//Attribute
		Route::group(['prefix'=>'attribute'],function(){
			Route::get('/','AttributeController@getAttribute');
			
			Route::get('add','AttributeController@getAddAttribute');
			Route::post('add','AttributeController@postAddAttribute');

			Route::get('edit/{id}','AttributeController@getEdittAttribute');
			Route::post('edit/{id}','AttributeController@postEditAttribute');

			Route::get('delete/{id}','AttributeController@getDeleteAttribute');
			Route::get('deletevalue/{id}','AttributeController@getDeleteAttValue');

	Route::group(['prefix'=>'admin'],function(){
		Route::group(['prefix'=>'bill'],function(){
			Route::get('','BillController@getBill');

			Route::get('edit/{id}','BillController@getEditBill');

			Route::get('delete/{id}','BillController@getDeleteBill');

		});
	});
});
