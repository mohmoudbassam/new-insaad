<?php

namespace App\Http\Middleware;

use Closure;

class Localize
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
        if (session()->has("locale")) {
            session()->replace(["locale" => app()->getLocale()]);
            app()->setLocale(session()->get("locale"));
        }
        return $next($request);
    }
}
