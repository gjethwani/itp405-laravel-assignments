<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Genre;
use App\Track;

class TracksController extends Controller
{
    public function index(Request $request) {
      $genre = '';
      $tracks = '';
      if (isset($_GET['genre'])) {
        $genre = $_GET['genre'];
        $tracks = (Genre::where('Name', $genre)->first())->Track;
      } else {
        $tracks = Track::take(100)->skip(0)->get();
      }
      /*$genreId = DB::table('genres')
        ->select('genres.GenreId')
        ->where('genres.Name', 'like', $genre)
        ->get();
      $genreId = (Genre::where('Name', $genre)->first())->GenreId;
      $tracks = DB::table('tracks')
        ->select('tracks.Name as trackName', 'albums.Title as albumName', 'artists.Name as artist', 'tracks.UnitPrice as price', 'genres.Name as genre')
        ->join('albums', 'albums.AlbumId', '=', 'tracks.AlbumId')
        ->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId')
        ->join('genres', 'genres.Name', '=', $genre)
        ->where('tracks.GenreId','=', $genreId[0]->GenreId)
        ->get();*/
        return view('tracks', [
            'tracks' => $tracks
        ]);
      }
  }
