<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Validator;
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

    public function submitReview($albumId, Request $request) {
        $validation = Validator::make([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ], [
            'title' => 'required',
            'body' => 'required|min:10'
        ]);
        if ($validation->passes()) {
          DB::table('reviews')->insert(
              ['title' => request('title'), 'body' => request('body'), 'album_id' => $albumId]
          );
          return redirect('/albums/'.$albumId.'/reviews');
        } else {
          return redirect('/albums/'.$albumId.'/reviews/new')
            ->withInput()
            ->withErrors($validation);
        }


    }
}
