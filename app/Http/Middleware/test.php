<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class test
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        if (isset($role[0]) && $role[0] == 1) {
            dd($role);
            return redirect('/');
        }
        return $next($request);
    }
}
