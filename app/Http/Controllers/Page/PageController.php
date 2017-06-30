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
    	return view('pages.landing', compact('posts'));
    }

    public function register(){
    	return view('pages.register');
    }

    public function login(){
    	return view('pages.login');
    }

    public function posts(){
        return view('pages.posts');
    }

    public function viewPost(){
        return view('pages.view-post');
    }

    public function browseArticles(){
        $posts = Post::whereStatus('published')->with('author')->paginate(5);
        return view('pages.browse-articles', compact('posts'));
    }

    public function about(){
        $article = Post::where('slug', 'aboutgabedi2015#')->first();
        return view('pages.about', compact('article'));
    }

    public function findTutors(){
        return view('pages.find-tutors');
    }

    public function article($slug, $post_id){
        $post = Post::where('id', $post_id)->with('comments')->with('author')->first();
        return view('pages.article', compact('post'));
    }
}
