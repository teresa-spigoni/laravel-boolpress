<?php

namespace App\Http\Controllers;

use App\Post;
use App\Author;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostCreated;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $tags = Tag::all();
        return view('post.create', compact('authors', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $path = $request->file('pic')->store('public');
        $author_id = $data['author_id'];

        if(!Author::find($author_id)){
            abort(404);
        }

        $post = new Post();
        $post->fill($data);
        $post->pic = $path;
        $post->save();

        $post->tags()->attach($data['tags']);

        $mail = new PostCreated($post);
        Mail::to('theexamplemail@example.it')->send($mail);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
