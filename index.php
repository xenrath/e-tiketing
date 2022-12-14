<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

<<<<<<< HEAD
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
=======
if (file_exists($maintenance = __DIR__ . '/storage/framework/maintenance.php')) {
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

<<<<<<< HEAD
require __DIR__.'/vendor/autoload.php';
=======
require __DIR__ . '/vendor/autoload.php';
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

<<<<<<< HEAD
$app = require_once __DIR__.'/bootstrap/app.php';
=======
$app = require_once __DIR__ . '/bootstrap/app.php';
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
