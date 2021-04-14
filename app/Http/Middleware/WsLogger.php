<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Log;

class WsLogger
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::create([
            'ip' => $request->getClientIp(),
            'route' => $request->getRequestUri(),
            'date' => date("Y-m-d"),
        ]);

        return $next($request);
    }
}
