<?php

namespace App\Services\Comments\Handlers;

use App\Models\Comment;
use App\Services\Comments\Repositories\CommentsRepositoryInterface;

class CommentCreateHandler
{
    private CommentsRepositoryInterface $commentsRepository;

    public function __construct(CommentsRepositoryInterface $commentsRepository)
    {
        $this->commentsRepository = $commentsRepository;
    }

    public function handle(array $data): Comment
    {
        return $this->commentsRepository->create($data);
    }
}
