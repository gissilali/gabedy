<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
    /**
     * User can like many Comments and a Comment can be liked by many Users
     * @return relationship gets all likes for a user 
     */
    public function likes(){
        return $this->belongsToMany('App\Post', 'likes', 'user_id', 'comment_id')->withTimeStamps();
    }

}
