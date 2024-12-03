<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
$envFile = '.env';

if (!empty($_SERVER['APP_ENV'])) {
    $envFile = '.env.' . $_SERVER['APP_ENV'];
} elseif (!empty(getenv('APP_ENV'))) {
    $envFile = '.env.' . getenv('APP_ENV');
}

// Controleer of het bestand bestaat en laad het
$app->loadEnvironmentFrom($envFile);

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


