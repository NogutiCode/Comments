<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CommentController extends Controller
{
    public function comment(Post $post)
    {
        $search = new Comment();
        $search -> body = request()->input('comment');
        $search -> user() -> associate(Auth::user());
        $search -> post() -> associate($post);
        $search -> save();
        return redirect()->back();
    }

}
