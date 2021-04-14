<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ResponseWrapper
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $route_name = Route::currentRouteName();

        $response->headers->set('X-ROUTE-APP', $route_name);

        return $response;
    }
}
