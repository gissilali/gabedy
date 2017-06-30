<?php

namespace App\Http\Controllers\Interactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {
        $comments = Comment::wherePostId($post_id)->orderBy('created_at', 'desc')->with('user')->paginate(5);

        return response($comments, 200);
    }

    public function loadMore($post_id, $number_of_comments){
        $comments = Comment::wherePostId($post_id)->orderBy('created_at', 'desc')->with('user')->paginate($number_of_comments);

        return response($comments, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug, $postId)
    {
        $comment = new Comment();
        
        $comment->validate($request->all());

        $comment->body = $request->body;

        $comment->user_id = Auth::user()->id;

        $post = Post::find($postId);

        $post->comments()->save($comment);

        if ($request->ajax()) {
            return response('true', 200);
        } else {
            return back();
        }
    }
}
