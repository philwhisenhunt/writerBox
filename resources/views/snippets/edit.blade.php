@extends('layout')

@section('content')



<form action="">

<h2><textarea name="title-area" id="" cols="30" rows="2">
{{$snippet->title}}

</textarea></h2>

<p class="main-entry">
<textarea name="" id="" cols="100" rows="10">
{{ $snippet->full_entry }}
</textarea>
</p>

<button>Save</button>
<button>Cancel</button>

</form>

@endsection