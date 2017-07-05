<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class PostsController extends Controller
{
    public function getPostsInCategory($slug, $category_id){
    	$category = Category::find($category_id);
    	$posts = $category->posts()->where('status','published')->with('author')->paginate(5);
    	return view('pages.browse-articles', compact('posts', 'category'));
    }

    public function getPosts(){
    	$category = 'All';
    	$posts = Post::where('status', 'published')->orderBy('created_at')->paginate(5);
    	return view('pages.browse-articles', compact('posts', 'category'));
    }
}
