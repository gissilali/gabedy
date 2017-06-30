<?php

namespace App\Http\Controllers\Interactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Bookmark;

class BookmarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBookmark($post_id)
    {
        $user = User::find(1);
        $user->bookmarks()->attach($post_id);
        return response('true', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function undoBookmark($id)
    {
        $bookmark = Bookmark::where('user_id', User::find(1)->id)->where('post_id', $post_id)->where('bookmarked', true)->first();
        $bookmark->bookmarked = false;
        $bookmark->update();
    }

    public function bookmarked($post_id){
        $bookmark = Bookmark::where('user_id', User::find(1)->id)->where('post_id', $post_id)->where('bookmarked', true)->first();
         if(count($bookmark) > 0){
            return response('true', 200);
         }
    }
}
