@extends('layout')

@section('content')
     @foreach($snippets as $snippet)
     <h3>{{ $snippet->title }}</h3>
     <p>{{ $snippet->full_entry }}</p>
     @endforeach
    <div class="main-content">

     <a href="/snippets/{$id}/edit"><button class="editing-buttons" name="edit">Edit</button></a>
    <a href="/snippets/{id}/delete"><button class="editing-buttons" name="delete">Delete</button></a> 
     </div>
@endsection