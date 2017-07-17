<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Topic;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $university = auth()->user()->university()->firstOrFail();
        $topics = Topic::all();
        $faculty = auth()->user()->faculty()->firstOrFail();
        return view('ucomm.home', compact('topics'),compact('faculty','university'));
    }
}
