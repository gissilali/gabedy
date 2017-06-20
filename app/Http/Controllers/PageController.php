<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function landing(){
    	return view('html.landing');
    }

    public function register(){
    	return view('html.register');
    }

    public function login(){
    	return view('html.login');
    }

    public function posts(){
        return view('html.posts');
    }

    public function viewPost(){
        return view('html.view-post');
    }

    public function browseArticles(){
        return view('html.browse-articles');
    }

    public function about(){
        return view('html.about');
    }

    public function findTutors(){
        return view('html.find-tutors');
    }

    public function article(){
        return view('html.article');
    }
}
