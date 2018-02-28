@extends('main-layout')

@section('title', 'Playlists')

@section('content')
    <table class="table">
      <tr>
        <th>Artist Name</th>
      </tr>
      @foreach($artists as $artist)
        <tr>
          <td>{{$artist->Name}}</td>
        </tr>
      @endforeach
    </table>
@endsection
