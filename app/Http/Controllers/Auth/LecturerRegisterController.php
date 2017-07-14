<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lecturer;

class LecturerRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:lecturer');
    }

    public function showRegistrationForm()
    {
        return view('auth.lecturerRegister');
    }

    public function register()
    {
        $this->validate(request(),[
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:lecturers',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $lecturer = Lecturer::create([
            'name' => request()->name,
            'email' => request()->email,
            'title' => request()->title,
            'password' => bcrypt(request()->password),
        ]);
        auth()->guard('lecturer')->login($lecturer);
        return redirect(route('lecturer.dashboard'));
    }
}
