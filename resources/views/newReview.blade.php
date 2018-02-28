@extends('main-layout')

@section('title', 'New Review')

@section('content')
<h1>New Review</h1>
<form method="post" action="/albums/{{$albumId}}/reviews">
    {{csrf_field()}}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="textarea" id="body" name="body" class="form-control">
    </div>
    <input type="submit" value="Submit Review" class="btn btn-primary">
</form>
@endsection
