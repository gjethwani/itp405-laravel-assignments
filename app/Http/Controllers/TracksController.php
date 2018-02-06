<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
    public function index(Request $request) {
      $genre = $request->query('genre');
      $genreId = DB::table('genres')
        ->select('genres.GenreId')
        ->where('genres.Name', 'like', $genre)
        ->get();
      $tracks = DB::table('tracks')
        ->select('tracks.Name as trackName', 'albums.Title as albumName', 'artists.Name as artist', 'tracks.UnitPrice as price', 'genres.Name as genre')
        ->join('albums', 'albums.AlbumId', '=', 'tracks.AlbumId')
        ->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId')
        ->join('genres', 'genres.Name', '=', $genre)
        ->where('tracks.GenreId','=', $genreId[0]->GenreId)
        ->get();
        return view('tracks', [
            'tracks' => $tracks
        ]);
      }
  }
