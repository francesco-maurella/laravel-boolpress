@extends('layouts.base')
@section('title', 'Author Info')
@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">USERNAME</th>
        <th scope="col">Avatar</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Email</th>
        <th scope="col">Posts ( {{count($author->posts)}} )</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <th scope="row">{{ $author->id }}</th>
          <td>{{ $author->username}}</td>
          <td><img src="{{ $author->author_info->avatar }}"></td>
          <td>{{ $author->author_info->name }}</td>
          <td>{{ $author->author_info->surname }}</td>
          <td>{{ $author->author_info->email }}</td>
          <td>
            <ul>
              @foreach ($author->posts as $post)
                <li>
                  <a href="{{route('posts.show', compact('post'))}}">
                    {{ $post->title }}
                  </a>
                </li>
              @endforeach
            </ul>
          </td>
        </tr>
    </tbody>
  </table>
@endsection
