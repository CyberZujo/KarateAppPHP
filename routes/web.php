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

Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/admin','AdminController@index');
Route::get('/members','HomeController@GetMembers');
Route::get('/gallery','HomeController@GalleryIndex');
Route::get('/posts','HomeController@GetPosts');
Route::get('/post/{id}','HomeController@GetPostDetails');
Route::get('/admin-members','MembersController@index');
Route::get('/admin-members/create','MembersController@create');
Route::get('/admin-members/loadData',"MembersController@loadTableData");
Route::post('/admin-members','MembersController@store');
Auth::routes();
Route::resource("admin-members","MembersController");
Route::resource("admin-posts","PostsController");