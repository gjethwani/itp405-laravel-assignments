@extends('main-layout')

@section('title', 'Albums')

@section('content')
    <table class="table">
      <tr>
        <th>Album Name</th>
      </tr>
      @foreach($albums as $album)
        <tr>
          <td>
            <a href="/albums/{{$album->AlbumId}}/reviews">{{$album->Title}}</a>
          </td>
        </tr>
      @endforeach
    </table>
@endsection
