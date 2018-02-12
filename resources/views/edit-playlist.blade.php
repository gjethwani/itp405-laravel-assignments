@extends('main-layout')

@section('title', 'Edit a Playlist')

@section('content')
    <h1>Edit Playlist</h1>

    @if ($errors->isNotEmpty())
        <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $message)
            {{$message}}
          @endforeach
        </div>
    @endif

    <form action="/playlists/{{$id}}/edit" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="playlist">Playlist Name</label>
            @if (old('playlist', null) != null)
              <input
                type="text"
                value="{{old('playlist')}}"
                id="playlist"
                name="playlist"
                class="form-control">
            @else
              <input
                type="text"
                value="{{$name}}"
                id="playlist"
                name="playlist"
                class="form-control">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
