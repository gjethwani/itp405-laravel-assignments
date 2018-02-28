@extends('main-layout')

@section('title', 'Artists')

@section('content')
    <table class="table">
      <tr>
        <th>Artist Name</th>
      </tr>
      @foreach($artists as $artist)
        <tr>
          <td>
            <a href="/artists/{{$artist->ArtistId}}/albums">{{$artist->Name}}</a>
          </td>
        </tr>
      @endforeach
    </table>
@endsection
