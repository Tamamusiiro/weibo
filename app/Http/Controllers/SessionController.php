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
            'password' => 'required|min:8|max:16'
        ]);
        if (Auth::attempt($data, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', '欢迎回来！');
                $fallback = route('user.show', [Auth::user()]);
                return redirect()->intended($fallback);
            } else {
                Auth::logout();
                session()->flash('warning', '你的账号未激活，请检查邮箱中的注册邮件进行激活。');
                return redirect('/');
            }
        } else {
            session()->flash('danger', '登陆失败，请检查邮箱或密码输入是否有误');
            return back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
