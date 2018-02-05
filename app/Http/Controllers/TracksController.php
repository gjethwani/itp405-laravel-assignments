<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
    public function index(Request $request) {
      $genre = $request->query('genre');
      $tracks = DB::table('tracks')
        ->select('tracks.Name as trackName', 'albums.Title as albumName', 'artists.Name as artist', 'tracks.UnitPrice as price')
        ->where('tracks.GenreId','=',$genre)
        ->join('albums', 'albums.AlbumId', '=', 'tracks.AlbumId')
        ->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId')
        ->get();
        if ($tracks->count()) {
          echo "hello"; //nothign being returned from query
        } else {
          return view('tracks', [
              'tracks' => $tracks
          ]);
        }

    }
}
