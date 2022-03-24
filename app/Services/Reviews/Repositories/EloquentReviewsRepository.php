<?php

namespace App\Services\Reviews\Repositories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;

class EloquentReviewsRepository implements ReviewsRepositoryInterface
{
    public function getAll(): Collection
    {
        return Review::all();
    }


    public function create(array $data): Review
    {
        return Review::create($data);
    }
}
