@extends('layouts.app')

@section('content')
  <h2>Books</h2>
  <ul>
    @foreach ($books as $book)
      <li>{{ $book->title }}</li>
    @endforeach
  </ul>
@endsection
