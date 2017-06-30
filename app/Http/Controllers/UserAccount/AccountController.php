<?php

namespace App\Http\Controllers\UserAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function showSettingsForm(Request $request, $user_id) {
    	$user = User::where('id', $user_id)->first();
    	return view('pages.settings', compact('user'));
    }

    public function updateProfile(Request $request, $user_id) {
    	$validator = Validator::make($request->all(), [
    			'email' => 'required|email',
    			'name' => 'required|string'
    		]);
    	if ($validator->fails()) {
    		return back()->withErrors($validator);
    	} else {
    		$user = User::find($user_id);
    		$user->email = $request['email'];
    		$user->name = $request['name'];
    		$user->update();
    		Session::flash('profile_updated', 'Your profile has been updated');
    		return back();
    	}
    }

    public function updatePassword(Request $request, $user_id){
    	$validator = Validator::make($request->all(), [
                'old_password' => 'required|min:6',
                'password' => 'required|min:6|',
                'password_confirmed' => 'same:password'
            ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
                $user = User::find($user_id);
            if (Hash::check($request['old_password'], $user->password)) {
                $user->password = $request['password'];
                $user->update();
                Session::flash('password_updated', 'Your password has been changed');
                return back();
            } else {
                Session::flash('password_not_matching', 'password does not match');
                return back();
            }
        }
    }
}
