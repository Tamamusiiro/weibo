<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.login');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:3|max:13'
        ]);
        if (Auth::attempt($data, $request->has('remember'))) {
            return redirect()->route('user.show', [Auth::user()]);
        } else {
            session('danger', '登陆失败，请检查邮箱或密码输入是否有误');
            return back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
