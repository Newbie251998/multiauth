<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CashierLoginController extends Controller
{

	public function __construct() {
		$this->middleware('guest:cashier', ['except' => ['logout']]);
	}

    public function showLoginForm() {
    	return view('auth.cashier-login');
    }

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::guard('cashier')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('cashier.dashboard'));
    	}
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('cashier')->logout();
        return redirect('/');
    }
}
