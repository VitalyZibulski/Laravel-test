<?php

namespace App\Http\Controllers\Api\v1;

use App\Events\ReviewCreated;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Services\Reviews\ReviewsService;
use Illuminate\Http\Request;

class ApiReviewsController extends Controller
{
    private ReviewsService $reviewsService;

    public function __construct(
        ReviewsService $reviewsService
    )
    {
        $this->middleware('is_admin', ['only' => ['store']]);

        $this->reviewsService = $reviewsService;
    }

    public function index(): ReviewResource
    {
        $reviews = $this->reviewsService->getReviews();
        return new ReviewResource($reviews);
    }

    public function store(Request $request)
    {
        $review = $this->reviewsService->createReview($request->all());
        ReviewCreated::dispatch($review);
    }
}
