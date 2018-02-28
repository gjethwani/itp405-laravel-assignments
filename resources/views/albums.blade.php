@extends('main-layout')

@section('title', 'Playlists')

@section('content')
    <table class="table">
      <tr>
        <th>Artist Name</th>
      </tr>
      @foreach($albums as $album)
        <tr>
          <td>{{$album->Title}}</td>
        </tr>
      @endforeach
    </table>
@endsection
