<?php

namespace App\Services\Reviews\Repositories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;

interface ReviewsRepositoryInterface
{
    public function getAll(): Collection;
    public function create(array $data): Review;
}
