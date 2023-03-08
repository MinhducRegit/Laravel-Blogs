<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Authentication\LoginRequest;

use DB;

class AdminLoginController extends Controller
{
    protected $table = 'users';
    public function index()
    {
        $title = 'Login';
        return view('authentication.login.index', compact('title'));
    }

    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table($this->table)->Where('email', $email)->Where('password', $password)->Where('role', 2)->first();
        if ($result) {
            $request->session()->put('email', $result->email);
            $request->session()->put('id', $result->id);
            $request->session()->put('role', $result->role);

            return redirect()->route('admin')->with('email', $request->email);
        } else {
            return redirect()->route('login-admin')->with('msg-error', __('msg.login-failed'));
        }
    }
}
