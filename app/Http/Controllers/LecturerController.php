<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;

class LecturerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:lecturer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uclass.lecturer');
    }
}
