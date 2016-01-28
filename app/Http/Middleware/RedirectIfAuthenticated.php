<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param Guard                    $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, Guard $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
