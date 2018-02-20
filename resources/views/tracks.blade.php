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
        <th>Media Type</th>
      </tr>
      @foreach($tracks as $track)
        <tr>
          <th>{{$track->Name}}</th>
          <th>{{$track->Album->Title}}</th>
          <th>{{$track->Album->Artist->Name}}</th>
          <th>{{$track->UnitPrice}}</th>
          <th>{{$track->MediaType->Name}}</th>
        </tr>
      @endforeach
    </table>
  </body>
</html>
