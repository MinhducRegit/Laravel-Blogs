<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() 
    {
        $title = 'User';
        return view('user.login', compact('title'));
    }
}
