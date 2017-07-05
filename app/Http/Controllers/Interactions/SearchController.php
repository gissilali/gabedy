<?php

namespace App\Http\Controllers\Interactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class SearchController extends Controller
{
    public function searchBy(Request $request)
    {
        $query = $request->q;
        Post::where('status','pending')->orWhere('status', 'draft')->unsearchable();
        Post::where('status','published')->searchable();
        $posts = Post::search($request->q)->get();
        if ($request->ajax()) {
            return $posts;
        } else {
            return view('partials.search-results', compact('posts', 'query'));
        }
    }
}
