@extends('layouts.base')
@section('title', 'Add new post')
@section('content')
  @include('layouts.part.form', [ 'edit' => false ])
@endsection
