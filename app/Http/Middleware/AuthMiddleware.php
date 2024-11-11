<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = session('token');

        if (!$token) {
            return redirect(route('login'));
        }

        $dbToken = PersonalAccessToken::findToken($token);

        if (!$dbToken) {
            return redirect(route('login'));
        }

        return $next($request);
    }
}
