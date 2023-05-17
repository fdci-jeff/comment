<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        $comments = Comments::with(['comments' => function ($query) {
            return $query->with(['user'])->latest()->skip(0)->take(10);
        }, 'user'])->where('parent_comment_id', null)->latest()->paginate();
        
        return response()->json($comments, 200);
    }
}
