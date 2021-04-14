<?php

namespace App\Http\Middleware;

use App\Models\Log;
use Closure;
use Illuminate\Http\Request;

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
            'date' => date('Y-m-d'),
        ]);

        return $next($request);
    }
}
