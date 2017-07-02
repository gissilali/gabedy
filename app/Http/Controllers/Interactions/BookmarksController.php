<?php

namespace App\Http\Controllers\Interactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Bookmark;
use Auth;

class BookmarksController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBookmark($post_id)
    {
        $user = Auth::user();
        $user->bookmarks()->attach($post_id);
        return response('true', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function undoBookmark($post_id)
    {
        $bookmark = Bookmark::where('user_id', Auth::user()->id)->where('post_id', $post_id)->where('bookmarked', true)->first();
        $bookmark->bookmarked = false;
        $bookmark->update();
        return back();
    }

    public function bookmarked($post_id){
        $bookmark = Bookmark::where('user_id', Auth::user()->id)->where('post_id', $post_id)->where('bookmarked', true)->first();
         if(count($bookmark) > 0){
            return response('true', 200);
         }
    }

    public function getBookmarks($user_id)
    {
        return Bookmark::where('user_id', Auth::user()->id)->where('bookmarked', true)->with('post')->get();
    }

    public function viewBookmarks(){
        $bookmarks = $this->getBookmarks(Auth::user()->id);
        return view('pages.my-bookmarks', compact('bookmarks'));
    }
}
