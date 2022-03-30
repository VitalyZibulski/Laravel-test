<?php

namespace App\Services\Routes\Providers\Api;

use App\Http\Controllers\Api\v1\ApiCommentsController;
use App\Http\Controllers\Api\v1\ApiReviewsController;
use App\Http\Controllers\Api\v1\AuthController;
use Illuminate\Support\Facades\Route;

class ApiRoutesProvider
{
    public function register() {
        Route::as('api.')
            ->middleware('auth:sanctum')
            ->group(function () {
                Route::apiResource('reviews', ApiReviewsController::class);
            });

        Route::as('api.')
            ->middleware('auth:sanctum')
            ->group(function () {
                Route::apiResource('comments', ApiCommentsController::class);
            });

        Route::as('api.')
            ->group(function () {
                Route::post('/register', [AuthController::class, 'register']);
                Route::post('/login', [AuthController::class, 'login']);
            });
    }
}
