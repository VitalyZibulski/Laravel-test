<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Resources\ReviewResource;
use App\Models\Comment;
use App\Services\Comments\CommentsService;
use App\Services\Reviews\UsersService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $this->commentsService->createComment($request->all());
    }
}
