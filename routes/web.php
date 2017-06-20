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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/**
 * front-end dev routes
 **/
Route::get('index', 'PageController@index');
Route::get('landing', 'PageController@landing');
Route::get('register', 'PageController@register');
Route::get('login', 'PageController@login');
Route::get('posts', 'PageController@posts');
Route::get('view-post', 'PageController@viewPost');
Route::get('browse-articles', 'PageController@browseArticles');
Route::get('about', 'PageController@about');
Route::get('find-tutors', 'PageController@findTutors');
Route::get('article', 'PageController@article');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
