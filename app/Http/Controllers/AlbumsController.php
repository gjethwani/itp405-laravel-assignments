<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function reviews($albumId) {
        $reviews = Album::find($albumId)->Review;
        return view('reviews', [
            'reviews' => $reviews
        ]);
    }
}
