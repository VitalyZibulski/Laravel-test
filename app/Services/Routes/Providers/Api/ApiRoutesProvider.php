<?php

namespace App\Services\Routes\Providers\Api;

use App\Events\ReviewCreated;
use App\Http\Controllers\Api\Users\ApiUsersController;
use App\Http\Controllers\Api\v1\ApiCommentsController;
use App\Http\Controllers\Api\v1\ApiReviewsController;
use App\Http\Controllers\Api\v1\AuthController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

class ApiRoutesProvider
{
    public function register() {
        Route::as('api.')
            ->middleware('auth:sanctum')
            ->group(function () {
                Route::apiResource('reviews', ApiReviewsController::class);
            });

        Route::as('api.auth.login')
            //->middleware('auth:sanctum')
            ->group(function () {
                Route::apiResource('comments', ApiCommentsController::class);
            });

        Route::as('api.auth.register')
            ->group(function () {
                Route::post('/register', [AuthController::class, 'register']);
                Route::post('/login', [AuthController::class, 'login']);
            });

        Route::get('event', function (){
            ReviewCreated::dispatch(Review::find(1));
        });
    }
}
