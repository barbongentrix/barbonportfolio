<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Vercel PHP lambda entry point (mirrors public/index.php).
// Requests are routed here from vercel.json because Vercel
// expects a serverless function under the /api directory.

require __DIR__.'/../vendor/autoload.php';

/** @var Illuminate\Foundation\Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
