<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest')->except('logout');
    }
    //
    public function showLogin()
    {
        return response()->view('cms.pages.auth.login');
    }

    public function login(Request $request)
    {

        $rules = [
            '*' => 'required',
            'email' => 'exists:users,email'
        ];
        $messages = [
            '*.required' => 'هذه الحقل مطلوب',
            'email.exists' => 'البريد الإلكتروني غير موجود'
        ];

        $this->validate($request, $rules, $messages);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        $check = Auth::attempt($credentials);

        if ($check) {
            Session::flash('success', 'تمت تسجيل الدخول بنجاح');
            return redirect()->intended('panel');
        }

        return back()->withInput($request->only('email'))->withFlashMessage('يرجى التأكد من اسم المستخدم و كلمة المرور');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        Session::flash('success', 'تمت تسجيل الخروج بنجاح');
        return redirect()->route('login');
    }
}
