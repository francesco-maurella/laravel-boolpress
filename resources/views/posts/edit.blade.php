@extends('layouts.base')
@section('title', 'Edit Post')
@section('content')
  @include('layouts.part.form', [ 'edit' => true ])
@endsection
