<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LecturerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:lecturer')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.lecturerLogin');
    }

    public function login(){
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if (Auth::guard('lecturer')->attempt(['email' => request()->email, 'password' => request()->password],request()->remember)){
            return redirect()->intended(route('lecturer.dashboard'));
        }
        return redirect()->back()->withInput(request()->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('lecturer')->logout();

        session()->flush();

        session()->regenerate();

        return redirect('/');
    }

}
