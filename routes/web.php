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
Route::get('index', 'Page\PageController@index');
Route::get('landing', 'Page\PageController@landing');
Route::get('register', 'Page\PageController@register');
Route::get('login', 'Page\PageController@login');
Route::get('posts', 'Page\PageController@posts');
Route::get('view-post', 'Page\PageController@viewPost');
Route::get('browse-articles', 'Page\PageController@browseArticles');
Route::get('about', 'Page\PageController@about');
Route::get('find-tutors', 'Page\PageController@findTutors');
Route::get('read/{slug}/{post_id}', 'Page\PageController@article');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/**
 *
 * Comment routes
 * 
 */
Route::post('respond-to/{slug}/{postId}', 'Interactions\CommentController@store');
Route::get('get-comments/{postId}', 'Interactions\CommentController@index');

/**
 *
 * Likes routes
 * 
 */
Route::get('is-liked/{comment_id}', 'Interactions\LikesController@liked');
Route::get('likes-count/{comment_id}', 'Interactions\LikesController@likesCount');
Route::post('like/{comment_id}', 'Interactions\LikesController@storeLike');
Route::post('unlike/{comment_id}', 'Interactions\LikesController@deleteLike');