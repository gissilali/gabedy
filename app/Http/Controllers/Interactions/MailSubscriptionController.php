<?php

namespace App\Http\Controllers\Interactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeToGabedi;
use App\Post;
use Illuminate\Support\Facades\Session;

class MailSubscriptionController extends Controller
{

    public function showSubscriptionForm() {
        return view('html.subscribe');     
    }
	
    public function subscribe(Request $request) {
    	$validator = Validator::make($request->all(), ['email' => 'required|email|unique:subscribers']);
    	
    	if ($validator->passes()) {
    		$user = Subscriber::create(['email' => $request['email']]);
    		$this->sendEmail($user);
    		return back();
    	} else {
    		return back()->withErrors($validator);
    	}	
    }

    public function sendEmail($user) {
        $message = Post::whereSlug('welcome-email')->first();
        Mail::to($user)->send(new WelcomeToGabedi($message));
        Session::flash('email_sent', ''.$user->email);
    }

    public function unsubscribe() {

    }
}
