<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        /*if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/

        switch($guard) {
            case 'admin':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                }
                break;

            case 'adviser':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('adviser.dashboard');
                }
                break;

            case 'aposys':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('aposys.dashboard');
                }
                break;

            case 'cashier':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('cashier.dashboard');
                }
                break;

            case 'e2e_ojt':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('e2e_ojt.dashboard');
                }
                break;

            case 'registrar':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('registrar.dashboard');
                }
                break;

            case 'student_assistant':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('student_assistant.dashboard');
                }
                break;

            default:
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('/home');
                }
                break;
        }

        return $next($request);
    }
}
