<?php

namespace App\Http\Middleware;

use Closure;

class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role == 'admin') {
            return $next($request);
        }
        else if(auth()->user()->role == 'doctor') {
            return $next($request);
        }
        else if(auth()->user()->role == 'nurse') {
            return $next($request);
        }
        else if(auth()->user()->role == 'patient') {
            return $next($request);
        }
    }
}
