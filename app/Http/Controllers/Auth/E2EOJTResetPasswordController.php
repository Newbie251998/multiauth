<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;

class E2EOJTResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/e2e_ojt';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:e2e_ojt');
    }

    protected function guard() {
        return Auth::guard('e2e_ojt');
    }

    protected function broker() {
        return Password::broker('e2e_ojts');
    }

    public function showResetForm(Request $request, $token = null) {
        return view('auth.passwords.reset-e2e_ojt')->with(['token' => $token, 'email' => $request->email]);
    }
}
