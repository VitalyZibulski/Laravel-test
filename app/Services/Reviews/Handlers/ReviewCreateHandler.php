<?php

namespace App\Services\Reviews\Handlers;

use App\Models\Review;
use App\Services\Reviews\Repositories\ReviewsRepositoryInterface;

class ReviewCreateHandler
{
    private ReviewsRepositoryInterface $reviewsRepository;

    public function __construct(ReviewsRepositoryInterface $reviewsRepository)
    {
        $this->reviewsRepository = $reviewsRepository;
    }

    public function handle(array $data): Review
    {
        return $this->reviewsRepository->create($data);
    }
}
