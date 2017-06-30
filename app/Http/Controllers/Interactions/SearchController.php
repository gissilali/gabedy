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
        $posts = Post::search($request->q)->get();
        if ($request->ajax()) {
            return response($posts, 200);
        } else {
            return view('partials.search-results', compact('posts', 'query'));
        }
    }
}
