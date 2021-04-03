<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Author;
use App\Tag;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

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
      return view('posts.index', compact('posts'));
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
      return view('posts.create', compact('authors', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = $request->file('img')->store('images');
      $this->isValid($request);

      $data = $request->all();
      $post = new Post();
      $post->fill($data);
      $post->img = $path;
      $post->save();

      $post->tags()->attach($data['tags']);

      $mailableObject = new Email($post);

      Mail::to('francesco.maurella@live.it')->send($mailableObject);

      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      $authors = Author::all();
      $tags = Tag::all();
      return view('posts.edit', compact('post', 'authors', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $this->isValid($request);

      $data = $request->all();
      $post->fill($data);
      $post->update();

      $post->tags()->attach($data['tags']);

      return redirect()->route('posts.index');
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

    public function isValid($list) {
      $list->validate(
        [
          'title' => 'required',
          'content' => 'required',
        ]);
      }
}
