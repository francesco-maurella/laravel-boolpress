@extends('layouts.base')
@section('title', 'Post Info')
@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Author</th>
        <th scope="col">Tags({{count($post->tags)}})</th>
        <th scope="col">Comments({{count($post->comments)}})</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>{{ $post->title}}</td>
          <td>{{ $post->content }}</td>
          <td>
            <a href="{{route('authors.show',
              ['author' => $post->author->id] )}}">
            {{ $post->author->username }}
            </a>
          </td>
          <td>
            @foreach ($post->tags as $tag)
              #{{ $tag->content }}
              <br />
            @endforeach
          </td>
          <td>
            @foreach ($post->comments as $comment)
              <i>{{ $comment->content }}</i>
              <br />
              <b>by {{ $comment->username }}</b>
              <hr />
            @endforeach
          </td>
        </tr>
    </tbody>
  </table>
@endsection
