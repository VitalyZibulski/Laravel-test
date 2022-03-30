<?php

namespace App\Http\Controllers\Api\v1;

use App\Events\CommentCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\ReviewResource;
use App\Models\Comment;
use App\Services\Comments\CommentsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiCommentsController extends Controller
{
    private CommentsService $commentsService;

    public function __construct(
        CommentsService $commentsService
    )
    {
        $this->commentsService = $commentsService;
    }

    public function index(): CommentResource
    {
        $comments = $this->commentsService->getComments();
        return new CommentResource($comments);
    }

    public function store(StoreCommentRequest $request)
    {
        $comment = $this->commentsService->createComment($request->all());
        CommentCreated::dispatch(Auth::user()->id, $comment);

        return new CommentResource($comment);
    }
}
