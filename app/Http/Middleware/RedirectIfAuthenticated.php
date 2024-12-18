<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('usuario')) {
            return redirect('/dashboard');
        }

        return $next($request);
    }
} 