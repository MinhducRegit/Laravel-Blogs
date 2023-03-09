<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    private $blogs;
    private $categories;
    public function __construct()
    {
        $this->blogs = new Blog();
        $this->categories = new Category();
    }

    public function index()
    {
        $title = 'Blog';
        $blogsList = $this->blogs->getAllBlogs();
        $categoryList = $this->categories->Category();
        // dd($blogsList);
        return view('client.blog.index', compact('title', 'blogsList', 'categoryList'));
    }
}
