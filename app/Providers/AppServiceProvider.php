<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;
use App\Bookmark;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['pages.home'], function($view){
            $posts = Post::whereStatus('published')->orderBy('updated_at', 'desc')->with('author')->paginate(5);
            $view->with('posts', $posts);         
        });
        view()->composer(['pages.home'], function($view){
            $bookmarks = Bookmark::where('user_id', Auth::user()->id)->where('bookmarked', true)->with('post')->paginate(2);
            $view->with('bookmarks', $bookmarks);         
        });

        view()->composer(['partials.slideout-menu','partials.header'], function($view){
            $categories = Category::orderBy('name')->get();
            $view->with('categories', $categories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
