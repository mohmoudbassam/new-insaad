<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //     'ar/dashboard',
        // 'ar/dashboard/*',
        // 'login',
    ];
    
    public function handle($request, Closure $next)
     {
    
         if ($this->app->isDownForMaintenance() &&
             !in_array($request->getClientIP(), ['78.182.148.44','5.46.217.13','78.160.236.81','78.182.156.202','78.184.167.136','78.182.146.91','88.238.253.234']))
         {
             return response('Coming soon!', 503);
         }

         return $next($request);
     }
     
}
