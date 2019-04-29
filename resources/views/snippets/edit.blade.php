@extends('layout')

@section('content')

<h2>{{$snippet->title}}</h2>
<p class="main-entry">
{{ $snippet->full_entry }}
</p>

@endsection