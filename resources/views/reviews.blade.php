@extends('main-layout')

@section('title', 'Playlists')

@section('content')
    <table class="table">
      <tr>
        <th>Reviews</th>
      </tr>
      @foreach($reviews as $review)
        <tr>
          <td>
            <h4>{{$review->title}}</h4>
            <p>{{$review->body}}</p>
          </td>
        </tr>
      @endforeach
    </table>
@endsection
