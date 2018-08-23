<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdviserLoginController extends Controller
{

	public function __construct() {
		$this->middleware('guest:adviser', ['except' => ['logout']]);
	}

    public function showLoginForm() {
    	return view('auth.adviser-login');
    }

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::guard('adviser')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('adviser.dashboard'));
    	}
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('adviser')->logout();
        return redirect('/');
    }
}
