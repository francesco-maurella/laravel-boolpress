@extends('layouts.base')
@section('title', 'Authors')
@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($authors as $author)
        <tr>
          <th scope="row">{{ $author->id }}</th>
          <td>
            <a href="{{route('authors.show', compact('author'))}}">
              {{ $author->username }}
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
