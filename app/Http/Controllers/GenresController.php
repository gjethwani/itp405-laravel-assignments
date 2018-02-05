<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GenresController extends Controller
{
    public function index() {
      $genres = DB::table('genres')
        ->get();
      return view('genres', [
        'genres' => $genres
      ]);
    }
}
