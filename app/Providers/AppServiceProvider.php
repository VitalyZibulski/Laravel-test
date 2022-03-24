<?php

namespace App\Providers;

use App\Services\Comments\Repositories\CommentsRepositoryInterface;
use App\Services\Comments\Repositories\EloquentCommentsRepository;
use App\Services\Reviews\Repositories\EloquentReviewsRepository;
use App\Services\Reviews\Repositories\ReviewsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ReviewsRepositoryInterface::class, EloquentReviewsRepository::class);
        $this->app->bind(CommentsRepositoryInterface::class, EloquentCommentsRepository::class);
    }
}
