<?php

namespace App\Services\Reviews\Repositories;

use App\Models\Review;
use Illuminate\Pagination\LengthAwarePaginator;

class EloquentReviewsRepository implements ReviewsRepositoryInterface
{
    public function getAll(): LengthAwarePaginator
    {
        return Review::with('comments')->paginate(10);
    }

    public function create(array $data): Review
    {
        return Review::create($data);
    }
}
