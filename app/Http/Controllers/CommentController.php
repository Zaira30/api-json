<?php

namespace App\Http\Controllers;


use App\Comment;
use App\Http\Resources\CommentResource;
use App\Http\Resources\CommentsResource;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return new CommentsResource(Comment::with(['author'])->paginate());
    }

    public function show(Comment $comment)
    {
        CommentResource::withoutWrapping();
        return new CommentResource($comment);
    }
}
