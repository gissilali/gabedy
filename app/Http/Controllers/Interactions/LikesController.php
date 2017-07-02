<?php

namespace App\Http\Controllers\Interactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Like;
use App\User;

class LikesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLike(Request $request, $comment_id)
    {
        $user = Auth::user();
        $user->likes()->attach($comment_id);
        return response('true', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteLike($comment_id)
    {
        Auth::user()->likes()->detach($comment_id);
        return response('false', 200);
    }

    /**
     * Check whether post is already liked or not
     * 
     * @return boolean 
     */
    
    public function liked($comment_id){
         $likes = Like::where('user_id', Auth::user()->id)->where('comment_id', $comment_id)->first();
         if(count($likes) > 0){
            return response('true', 200);
         }
    }

    public function likesCount($comment_id){
        $likes_count = count(Like::where('comment_id', $comment_id)->get());
        return response($likes_count, 200);
    }
}
