@extends('layout')

@section('content')
     @foreach($snippets as $snippet)
     <h3>{{ $snippet->title }}</h3>
     <p>{{ $snippet->full_entry }}</p>
     @endforeach
    <div class="main-content">

     <button class="editing-buttons">Edit</button>
     <button class="editing-buttons">Delete</button>
     </div>
@endsection