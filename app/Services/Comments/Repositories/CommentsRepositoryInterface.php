<?php

namespace App\Services\Comments\Repositories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

interface CommentsRepositoryInterface
{
    public function getAll(): Collection;
    public function create(array $data): Comment;
}
