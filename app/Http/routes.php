<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('frutas','WelcomeController@index');
Route::get('welcome/category','WelcomeController@example');
Route::get('welcome/category_list',['as'=>'welcome.category_list','uses'=>'WelcomeController@example2']);


Route::group(['prefix'=>'categories'], function(){
    Route::get('create',['as'=>'categories.form', 'uses'=>'CategoriesController@create']);
    Route::get('index',['as'=>'categories', 'uses'=>'CategoriesController@index']);
    Route::get('destroy/{$id}',['as'=>'categories.destroy', 'uses'=>'CategoriesController@destroyData']);
    Route::get('create',['as'=>'categories.form', 'uses'=>'CategoriesController@create']);
    Route::post('store',['as'=>'categories.cad', 'uses'=>'CategoriesController@store']);
});