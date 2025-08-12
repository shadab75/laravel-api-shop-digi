<?php

use App\Http\Controllers\ApiController;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\DB;

$apiController = new ApiController();
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) use ($apiController): void {
        //
        $exceptions->render(function (Throwable $ex) use ($apiController){
           DB::rollBack();
           return $apiController->errorResponse(403,$ex->getMessage());
        });
    })->create();
