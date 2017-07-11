<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class StudentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $courses = Course::all();
        return view('uclass.student',compact('courses'));
    }
}
