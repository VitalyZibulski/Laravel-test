<?php

namespace App\Services\Reviews\Repositories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ReviewsRepositoryInterface
{
    public function getAll(): LengthAwarePaginator;
    public function create(array $data): Review;
}
