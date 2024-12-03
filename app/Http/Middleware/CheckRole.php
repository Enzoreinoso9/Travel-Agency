<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirigir a login si no está autenticado
        }

        // Verificar si el usuario tiene el rol requerido
        if (Auth::user()->rol !== $role) {
            return redirect('/dashboard'); // Redirigir a dashboard si no tiene el rol adecuado
        }

        return $next($request); // Continuar con la solicitud si tiene el rol adecuado
    }
}