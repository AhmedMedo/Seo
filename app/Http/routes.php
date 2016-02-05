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

Route::get('/',['as'=>'home','uses'=>'SeoController@show']); 
Route::get('/categories',['as'=>'categories','uses'=>'SeoController@showCategories']);
Route::get('/categories/{category}','SeoController@categoryPosts');
  
/*========== Admin area controllers *============= */
Route::get('/seodashboard',['as'=>'dashboard','uses'=>'PostController@showDashboard']);
Route::resource('/seodashboard/posts','PostController');
Route::resource('/seodashboard/categories','CategoryController');
Route::get('/seodashboard/comments',['as'=>'comment','uses'=>'CommentController@show']);
