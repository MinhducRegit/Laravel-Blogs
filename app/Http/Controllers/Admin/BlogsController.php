<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{

    private $blogs;
    public function __construct()
    {
        $this->blogs = new Blog();
    }

    public function index()
    {
        $blogsList = $this->blogs->getAllBlogs();
        // dd($blogsList);
        return view('admin.blogs.index', compact('blogsList'));
    }
}
