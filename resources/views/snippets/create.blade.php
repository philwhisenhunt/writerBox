@extends('layout')

@section('content')



<form action="">
    <div class="control">
        <input type="text" class="input" name="title" placeholder="Title" value=""">
    </div>
    <div class="class">

        <div class="control">
            <textarea name="body-of-snippet" class="textarea" cols="100" rows="10"></textarea>
        </div>

    </div>
    <button class="">Save</button>
    <button>Cancel</button>

</form>

@endsection