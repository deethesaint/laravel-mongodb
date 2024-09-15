<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $post = new Post();
        $post->fill($data);
        $post->save();
        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = Post::all();
        return view('postget', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($_id)
    {
        $post = Post::where('_id', $_id)->first();
        return view('postedit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $post = Post::where('_id', '=', $request->get('_id'))->first();
        $post->fill($request->all());
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($_id)
    {
        $post = Post::where('_id', '=', $_id)->first();
        $post->delete();
        return redirect('/posts');
    }
}
