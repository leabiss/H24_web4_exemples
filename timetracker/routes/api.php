<?php

use App\Http\Controllers\TimeentryController;
use App\Http\Middleware\AuthenticateOnceWithBasicAuth;
use Illuminate\Support\Facades\Route;

// Autre façon de faire des routes ...
Route::prefix('timeentries')
    ->controller(TimeentryController::class)
    ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{timeentry}', 'show');
        Route::post('/', 'store');
        Route::put('/{timeentry}', 'update');
        Route::delete('/{timeentry}', 'destroy');
    });
