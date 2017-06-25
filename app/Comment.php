<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Comment extends Model
{
	protected $table = 'comments';

	protected $fillable = ['body'];

    public function post(){
    	return $this->belongsTo('App\Post');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    private $rules = [
    	'body' => 'required|max:1000'
    ];



    public function validate($data){
    	$validator = Validator::make($data, $this->rules);

    	if ($validator->fails()) {
    		return back()->withErrors();
    	}
    }

    /**
     * User can like many Comments and a Comment can be liked by many Users
     * @return relationship gets all likes for a user 
     */
    public function likes(){
        return $this->belongsToMany('App\Post', 'likes', 'comment_id', 'user_id')->withTimeStamps();
    }

}
