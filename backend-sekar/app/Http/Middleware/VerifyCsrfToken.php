<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCsrfToken extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
    protected $except = [
        '/api/google',
        '/auth/google/callback', // atau route lain yang relevan
    ];

    protected $middlewareGroups = [
        'web' => [
            // Other middleware...
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
    ];
}
