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
	Route::group(['prefix'=>'admin'],function(){
		Route::group(['prefix'=>'bill'],function(){
			Route::get('','BillController@getBill');

			Route::get('edit/{id}','BillController@getEditBill');

			Route::get('delete/{id}','BillController@getDeleteBill');
		});
	});
});
