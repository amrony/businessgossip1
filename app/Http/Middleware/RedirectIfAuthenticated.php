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
//    public function handle($request, Closure $next, $guard = null)
//    {
////        dd($request->all());
//        if ($guard == "profile" && Auth::guard($guard)->check()) {
//            return redirect('/profile');
//        }
//        if (Auth::guard($guard)->check()) {
//            return redirect('/home');
//        }
//
//        return $next($request);
//    }

    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard){
            case 'web':
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
            case 'profile':
                if (Auth::guard($guard)->check()) {
                    return redirect('/');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }
        return $next($request);
    }
}
