<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Artist;

class ArtistsController extends Controller
{
    public function index() {
        $artists = DB::table('artists')->get();
        return view('artists', [
          'artists' => $artists
        ]);
    }

    public function albums($artistId) {
        $albums = Artist::find($artistId)->Album;
        return view('albums', [
          'albums' => $albums
        ]);
    }
}
