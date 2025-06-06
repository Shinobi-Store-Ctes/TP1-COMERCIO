<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user() || ! $request->user()->hasRole('admin')) {
            // Redirecciona a la home con un mensaje flash (opcional)
            session()->flash('feedback.message', 'No tenés permisos para acceder a esta sección.');
            session()->flash('feedback.type', 'danger');
            return redirect()->route('home');
        }

        return $next($request);
    }

}
