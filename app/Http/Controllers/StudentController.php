<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class StudentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $courses = auth()->user()->courses()->get();
        return view('uclass.student',compact('courses'));
    }

    public function profile(User $user){
        return view('ucomm.profile',compact('user'));
    }
}
