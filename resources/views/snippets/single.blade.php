@extends('layout')

@section('content')
     @foreach($snippets as $snippet)
     <h3>{{ $snippet->title }}</h3>
     <p>{{ $snippet->full_entry }}</p>
     @endforeach

@endsection