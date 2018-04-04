<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function store(Request $request) {
      $body = $request->body;
      $user = Auth::user();
      $token = $user->twitter_token;
      $tokenSecret = $user->twitter_token_secret;
      //post the tweet
      $connection = new TwitterOAuth(
        env('TWITTER_CLIENT_ID'),
        env('TWITTER_CLIENT_SECRET'),
        $token,
        $tokenSecret
      );
      $connection->post('statuses/update', [
        'status' => $request->body
      ]);
      return redirect('/profile');
    }
}
