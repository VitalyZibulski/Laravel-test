<?php

namespace App\Services\Comments;

use App\Models\Comment;
use App\Services\Comments\Handlers\CommentCreateHandler;
use App\Services\Comments\Handlers\CommentGetAllHandler;
use Illuminate\Database\Eloquent\Collection;

class CommentsService
{
    private CommentGetAllHandler $commentGetAllHandler;
    private CommentCreateHandler $commentCreateHandler;

    public function __construct(
        CommentGetAllHandler $commentGetAllHandler,
        CommentCreateHandler $commentCreateHandler
    )
    {
        $this->commentGetAllHandler = $commentGetAllHandler;
        $this->commentCreateHandler = $commentCreateHandler;
    }

    public function getComments(): Collection
    {
        return $this->commentGetAllHandler->handle();
    }

    public function createReview(array $data): Comment
    {
        return $this->commentCreateHandler->handle($data);
    }
}
