<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new User();
    }

    public function index()
    {
        $title = 'User';
        $usersList = $this->users->getAllUsers();
        // dd($usersList);
        return view('admin.users.index', compact('title', 'usersList'));
    }
}
