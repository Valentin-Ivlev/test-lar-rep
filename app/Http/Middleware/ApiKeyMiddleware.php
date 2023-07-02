<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Передача api-key в заголовке запроса:
        // $apiKey = $request->header('X-API-Key');

        // Передача api-key в параметре запроса:
        $apiKey = $request->input('api_key');

        if ($apiKey !== env('API_KEY')) {
            return response()->json(['message' => 'Invalid API key'], 401);
        }

        return $next($request);
    }
}
