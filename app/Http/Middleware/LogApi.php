<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogApi
{
    public function handle($request, Closure $next)
    {
        Log::info('API Request', [
            'method' => $request->method(),
            'url' => $request->url(),
            'body' => $request->all()
        ]);
        return $next($request);
    }
}

