<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(20);
        return response()->json([
            'data' => $posts,
        ]);
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
    public function store(NewPostRequest $request)
    {
        if ($post = $request->persist()) {
            session()->flash('message', 'Your post has been stored!');
            return view('partials.post',compact('post'));
        } else{
            return response()->json([
                'status' => 500,
                'data' => $post,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->json([
            'content' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return response()->json([
            'data' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if ($post = $request->persist($post)) {
            session()->flash('message', 'Your post has been changed!');
            return response()->json([
                'status' => 204,
                'data' => $post,
            ]);
        } else{
            return response()->json([
                'status' => 500,
                'data' => $post,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->owner()){
            $post->delete();
            return response()->json([
                'status' => 20,
                'data' => $post,
            ]);
        }else{
            return response()->json([
                'status' => 500,
                'data' => $post,
            ]);
        }
    }
}