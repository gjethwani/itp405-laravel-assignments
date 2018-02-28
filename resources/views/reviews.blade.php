@extends('main-layout')

@section('title', 'Reviews')

@section('content')
    <a href="/albums/{{$albumId}}/reviews/new">Write a Review</a>
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
