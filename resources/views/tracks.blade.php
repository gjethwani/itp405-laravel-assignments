<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tracks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <table class = "table">
      <tr>
        <th>Track Name</th>
        <th>Album Title</th>
        <th>Artist Name</th>
        <th>Price</th>
      </tr>
      @foreach($tracks as $track)
        <tr>
          <th>{{$track->trackName}}</th>
          <th>{{$track->albumName}}</th>
          <th>{{$track->artist}}</th>
          <th>{{$track->price}}</th>
        </tr>
      @endforeach
    </table>
  </body>
</html>
