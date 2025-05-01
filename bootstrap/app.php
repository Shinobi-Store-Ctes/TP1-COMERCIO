<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => IsAdmin::class,
        ]);

        $middleware->redirectGuestsTo(function (\Illuminate\Http\Request $request) {
            session()->flash(
                'feedback.message',
                'Debes iniciar sesión para acceder a esta sección'
            );
            session()->flash('feedback.type',  'danger');
            return route('auth.login');
        });
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
