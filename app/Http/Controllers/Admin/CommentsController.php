<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    private $comments;
    public function __construct()
    {
        $this->comments = new Comment();
    }

    public function index()
    {
        $title = 'Comments';
        $commentsList = $this->comments->getAllComments();
        // dd($commentsList);
        return view('admin.comments.index', compact('title', 'commentsList'));
    }
}
