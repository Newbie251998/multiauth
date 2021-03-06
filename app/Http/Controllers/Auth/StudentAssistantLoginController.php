<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentAssistantLoginController extends Controller
{

	public function __construct() {
		$this->middleware('guest:student_assistant', ['except' => ['logout']]);
	}

    public function showLoginForm() {
    	return view('auth.student_assistant-login');
    }

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::guard('student_assistant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('student_assistant.dashboard'));
    	}
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('student_assistant')->logout();
        return redirect('/');
    }
}
