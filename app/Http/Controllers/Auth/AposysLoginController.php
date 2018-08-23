<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AposysLoginController extends Controller
{

	public function __construct() {
		$this->middleware('guest:aposys', ['except' => ['logout']]);
	}

    public function showLoginForm() {
    	return view('auth.aposys-login');
    }

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::guard('aposys')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('aposys.dashboard'));
    	}
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('aposys')->logout();
        return redirect('/');
    }
}
