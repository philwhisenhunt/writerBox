@extends('layout')

@section('content')


<div class="main-content">
<form method="POST">
    <div class="control">
        <input type="text" class="input" name="title" placeholder="Title" value="">
    </div>
    <div class="class">

        <div class="control">
            <textarea name="body-of-snippet" class="textarea" cols="100" rows="10"></textarea>
        </div>

    </div>
    <button class="" name="Saver" type="submit">Save</button>
    <button>Cancel</button>

</form>

</div>

@endsection