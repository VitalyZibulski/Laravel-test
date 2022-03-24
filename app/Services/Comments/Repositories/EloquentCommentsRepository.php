<?php

namespace App\Services\Comments\Repositories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

class EloquentCommentsRepository implements CommentsRepositoryInterface
{
    public function getAll(): Collection
    {
        return Comment::all();
    }

    public function create(array $data): Comment
    {
        return Comment::create($data);
    }
}
