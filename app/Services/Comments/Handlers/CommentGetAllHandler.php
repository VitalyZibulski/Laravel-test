<?php

namespace App\Services\Comments\Handlers;

use App\Services\Comments\Repositories\CommentsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CommentGetAllHandler
{
    private CommentsRepositoryInterface $commentsRepository;

    public function __construct(CommentsRepositoryInterface $commentsRepository)
    {
        $this->commentsRepository = $commentsRepository;
    }

    public function handle(): Collection
    {
        return $this->commentsRepository->getAll();
    }
}
