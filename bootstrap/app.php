<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\DashboardAuth;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        // register dashboard auth middleware
        $middleware->appendToGroup('auth', [DashboardAuth::class]);
        // echo 'Middleware registered';
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
