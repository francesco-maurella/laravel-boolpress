@extends('layouts.base')
@section('title')
@section('content')
<h3>
  <a href="{{route('posts.index')}}">
    Views POSTS
  </a>
</h3>

<br />
<br />

<h3>
  <a href="{{route('authors.index')}}">
    Views AUTHORS
  </a>
</h3>

@endsection
