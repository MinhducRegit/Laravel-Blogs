<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Authentication\RegisterRequest;

class RegisterController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new User();
    }
    public function index()
    {
        $title = 'Register';

        return view('authentication.register.index', compact('title'));
    }

    public function register(RegisterRequest $request)
    {
        $dataInsert = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => md5($request->password),
        ];

        $this->users->addUser($dataInsert);
        return redirect()->route('login')->with('msg', __('msg.login-success'));
    }
}
