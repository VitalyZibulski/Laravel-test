<?php

namespace App\Services\Reviews;

use App\Models\Review;
use App\Services\Reviews\Handlers\ReviewGetAllHandler;
use App\Services\Reviews\Handlers\ReviewCreateHandler;
use Illuminate\Database\Eloquent\Collection;

class ReviewsService
{
    private ReviewGetAllHandler $reviewGetAllHandler;
    private ReviewCreateHandler $reviewCreateHandler;

    public function __construct(
        ReviewGetAllHandler $reviewGetAllHandler,
        ReviewCreateHandler $reviewCreateHandler
    )
    {
        $this->reviewGetAllHandler = $reviewGetAllHandler;
        $this->reviewCreateHandler = $reviewCreateHandler;
    }

    public function getReviews(): Collection
    {
        return $this->reviewGetAllHandler->handle();
    }

    public function createReview(array $data): Review
    {
        return $this->reviewCreateHandler->handle($data);
    }
}
