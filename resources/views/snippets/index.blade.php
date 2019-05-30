@extends('layout')

@section('content')


     @foreach ($snippets as $snippet)
       <a href="/snippets/{{$snippet->id}}"><h3 class='snippet-title'>{{ $snippet->title }}</h3></a>

        <p>{{ $snippet->full_entry }}</p>

     @endforeach

        
@endsection