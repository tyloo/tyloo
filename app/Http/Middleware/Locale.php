<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        if (session()->has('language')) {
            $lang = session('language');
        } else {
            $lang = config('app.locale');
        }
        app()->setLocale($lang);

        return $next($request);
    }
}
