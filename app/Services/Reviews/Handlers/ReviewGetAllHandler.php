<?php

namespace App\Services\Reviews\Handlers;

use App\Services\Reviews\Repositories\ReviewsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ReviewGetAllHandler
{
    private ReviewsRepositoryInterface $reviewsRepository;

    public function __construct(ReviewsRepositoryInterface $reviewsRepository)
    {
        $this->reviewsRepository = $reviewsRepository;
    }

    public function handle(): Collection
    {
        return $this->reviewsRepository->getAll();
    }
}
