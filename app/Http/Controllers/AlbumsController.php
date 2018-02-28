<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use DB;

class AlbumsController extends Controller
{
    public function reviews($albumId) {
        $reviews = Album::find($albumId)->Review;
        return view('reviews', [
            'reviews' => $reviews,
            'albumId' => $albumId
        ]);
    }

    public function newReview($albumId) {
        return view('newReview', [
            'albumId' => $albumId
        ]);
    }

    public function submitReview($albumId) {
        DB::table('reviews')->insert(
            ['title' => request('title'), 'body' => request('body'), 'album_id' => $albumId]
        );
        return redirect('/albums/'.$albumId.'/reviews');
    }
}
