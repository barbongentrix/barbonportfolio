<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Vercel terminates TLS at its edge and forwards the request with
        // proxy headers (X-Forwarded-For / X-Forwarded-Proto). Trusting the
        // proxy keeps generated URLs and redirects on the correct scheme.
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// ------------------------------------------------------------------
// Serverless deployment fix (Vercel): the filesystem is read-only,
// so the storage directory must live inside the writable /tmp folder.
// Local development keeps using the default storage path.
// ------------------------------------------------------------------
if (isset($_SERVER['VERCEL']) || isset($_SERVER['VERCEL_URL'])) {
    $app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp/storage');
}

// Ensure every storage subdirectory exists, wherever storage lives.
$directories = [
    $app->storagePath().'/framework/views',
    $app->storagePath().'/framework/cache/data',
    $app->storagePath().'/framework/sessions',
    $app->storagePath().'/logs',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        @mkdir($directory, 0775, true);
    }
}

return $app;
