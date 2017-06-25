<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	public function author(){
		return $this->belongsTo('App\User', 'author_id', 'id');
	}

	public function comments(){
		return $this->hasMany('App\Comment');
	}

	// public function addComment($body, $user_id){
	// 	$this->comments()->create(compact('body', 'user_id'));
	// }

	/**
     * User can like many Comments and a Comment can be liked by many Users
     * @return relationship gets all likes for a user 
     */
    public function likes(){
        return $this->belongsToMany('App\User', 'likes', 'user_id', 'comment_id')->withTimeStamps();
    }
}
