<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
class PageController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function landing(){
        $posts = Post::whereStatus('published')->with('author')->get();
    	return view('html.landing', compact('posts'));
    }

    public function register(){
    	return view('html.register');
    }

    public function login(){
    	return view('html.login');
    }

    public function posts(){
        return view('html.posts');
    }

    public function viewPost(){
        return view('html.view-post');
    }

    public function browseArticles(){
        return view('html.browse-articles');
    }

    public function about(){
        return view('html.about');
    }

    public function findTutors(){
        return view('html.find-tutors');
    }

    public function article($slug, $post_id){
        $post = Post::find($post_id)->with('comments')->with('author')->first();
        return view('html.article', compact('post'));
    }
}
