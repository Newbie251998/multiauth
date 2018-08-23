<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class E2EOJTLoginController extends Controller
{

	public function __construct() {
		$this->middleware('guest:e2e_ojt', ['except' => ['logout']]);
	}

    public function showLoginForm() {
    	return view('auth.e2e_ojt-login');
    }

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::guard('e2e_ojt')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('e2e_ojt.dashboard'));
    	}
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('e2e_ojt')->logout();
        return redirect('/');
    }
}
