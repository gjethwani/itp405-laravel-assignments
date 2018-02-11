@extends('main-layout')

@section('title', 'Create a Playlist')

@section('content')
    <h1>Create a Playlist</h1>

    @if ($errors->isNotEmpty())
        <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $message)
            {{$message}}
          @endforeach
        </div>
    @endif

    <form action="/playlists" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="playlist">Playlist Name</label>
            <input
                type="text"
                value="{{old('playlist')}}"
                id="playlist"
                name="playlist"
                class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
