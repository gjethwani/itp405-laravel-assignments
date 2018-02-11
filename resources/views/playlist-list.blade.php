
@extends('main-layout')

@section('title', 'Playlists')

@section('content')
    <a href="/playlists/new">Add Playlist</a>
    <ul>
        @foreach($playlists as $playlist)
            <li>
                <a href="/playlists/{{$playlist->PlaylistId}}">
                    {{$playlist->Name}}
                </a>
                <a
                  href="/playlists/{{$playlist->PlaylistId}}/edit?name={{$playlist->Name}}">
                  | Edit |
                </a>
                <a
                  href="/playlists/{{$playlist->PlaylistId}}/delete">
                  Delete 
                </a>
            </li>
        @endforeach
    </ul>
@endsection
