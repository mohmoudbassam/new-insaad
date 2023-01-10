<?php

namespace App\Http\Middleware;

use Closure;

class LocalizeApi
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->server('HTTP_ACCEPT_LANGUAGE');

        if (isset($locale)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
