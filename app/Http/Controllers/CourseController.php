<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'code' => 'required',
            'description' => 'required',
            'department' => 'required',
            'units' => 'required',
        ]);
    $course = Course::create([
        'lecturer_id' => auth('lecturer')->user()->id,
        'title' => request('title'),
        'code' => request('code'),
        'description' => request('description'),
        'department' => request('department'),
        'units' => request('units'),
    ]);
    return view('partials.course',compact('course'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('partials.course_complete',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
    public function search($query){
        $courses = Course::where('title', 'like', '%'.$query.'%')->whereDoesntHave('users')->get();
        return view('partials.course-results',compact('courses'));
    }
    public function join(Course $course){
        $student = User::find(auth()->user()->id);
        $student->courses()->attach($course);
        return response()->json([
            'status' => 201,
            'data' => $student,
        ]);
    }
}
