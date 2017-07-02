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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

/**
 * Main Pages Routes
 * these routes lead to main pages of the blog site
 */
Route::get('/', 'Page\PageController@landing')->middleware('guest');
Route::get('posts', 'Page\PageController@posts');
Route::get('view-post', 'Page\PageController@viewPost');
Route::get('browse-articles', 'Page\PageController@browseArticles');
Route::get('about', 'Page\PageController@about');
Route::get('find-tutors', 'Page\PageController@findTutors');
Route::get('read/{slug}/{post_id}', 'Page\PageController@article');
Route::get('/home', 'HomeController@index')->name('home');
/**
 * Post routes
 */
Route::get('category/{slug}/{category_id}', 'Posts\PostsController@getPostsInCategory');
Route::get('category/all', 'Posts\PostsController@getPosts');




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
Route::get('get-comments/{postId}/{number_of_comments}', 'Interactions\CommentController@loadMore');

/**
 *
 * Likes routes
 * 
 */
Route::get('is-liked/{comment_id}', 'Interactions\LikesController@liked');
Route::get('likes-count/{comment_id}', 'Interactions\LikesController@likesCount');
Route::post('like/{comment_id}', 'Interactions\LikesController@storeLike');
Route::post('unlike/{comment_id}', 'Interactions\LikesController@deleteLike');
/**
 *
 * Bookmark routes
 * 
 */
Route::post('bookmark/{comment_id}', 'Interactions\BookmarksController@storeBookmark');
Route::get('is-bookmarked/{comment_id}', 'Interactions\BookmarksController@bookmarked');
/**
 *
 * Search routes
 * 
 */
Route::get('search', 'Interactions\SearchController@searchBy');
/**
 * Subscription rooutes
 * 
 */
Route::post('subscribe', 'Interactions\MailSubscriptionController@subscribe');
Route::get('subscribe', 'Interactions\MailSubscriptionController@showSubscriptionForm');
/**
 * Account configuration routes
 *
 * 
 */
Route::get('settings/{user_id}', 'UserAccount\AccountController@showSettingsForm');
Route::post('edit/profile/{user_id}', 'UserAccount\AccountController@updateProfile');
Route::post('change/password/{user_id}', 'UserAccount\AccountController@updatePassword');
/**
 * My Bookmarks 
 * 
 */
Route::get('my-bookmarks', 'Interactions\BookmarksController@viewBookmarks');
Route::post('remove-bookmarks/{post_id}/', 'Interactions\BookmarksController@undoBookmark');