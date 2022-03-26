<?php

namespace App\Services\Reviews\Handlers;

use App\Services\Reviews\Repositories\ReviewsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ReviewGetAllHandler
{
    private ReviewsRepositoryInterface $reviewsRepository;

    public function __construct(ReviewsRepositoryInterface $reviewsRepository)
    {
        $this->reviewsRepository = $reviewsRepository;
    }

    public function handle(): LengthAwarePaginator
    {
        return $this->reviewsRepository->getAll();
    }
}
