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
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password),
            'gender' => $request->gender,


        ];

        $this->users->addUser($dataInsert);


        return redirect()->route('login')->with('msg', 'Thêm dữ liệu thành công');
    }
}
