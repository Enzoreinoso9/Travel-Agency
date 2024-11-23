<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
} 