@extends('layouts.base')
@section('title', 'Posts')
@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Author</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>
            <a href="{{route('posts.show', compact('post'))}}">
              {{ $post->title }}
            </a>
          </td>
          <td>{{ $post->content }}</td>
          <td>
            <a href="{{route('authors.show',
              ['author' => $post->author->id])}}">
              {{ $post->author->username }}
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
