<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Authentication\LoginRequest;

use DB;

class LoginController extends Controller
{
    protected $table = 'users';
    public function index()
    {
        return view('authentication.login.index');
    }

    public function login(LoginRequest $request)
    {

        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table($this->table)->Where('email', $email)->Where('password', $password)->first();
        if ($result) {
            $request->session()->put('email', $result->email);
            $request->session()->put('id', $result->id);

            return redirect()->route('blog')->with('email', $request->email);
        } else {
            return redirect()->route('login')->with('msg-error', __('msg.login-failed'));
        }
    }
}
