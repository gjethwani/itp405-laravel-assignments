<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $loginWasSuccessful = Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);
        if ($loginWasSuccessful) {
            return redirect('/profile');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function redirectToTwitter() {
      return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback() {
      $twitterUser = Socialite::driver('twitter')->user();
      $user = User::where('email', '=', $twitterUser->getEmail())->first();
      if (!$user) {
        $user = new User();
        $user->name = $twitterUser->getName();
        $user->email = $twitterUser->getEmail();
      }
      $user->twitter_token = $twitterUser->token;
      $user->twitter_token_secret = $twitterUser->tokenSecret;
      $user->save();
      Auth::login($user);
    }

    public function redirectToGithub() {
      return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback() {
      $githubUser = Socialite::driver('github')->user();
      $user = User::where('email', '=', $githubUser->getEmail())->first();
      if (!$user) {
        $user = new User();
        $user->name = $githubUser->getName();
        if ($user->name == NULL || $user->name == '') {
          $user->name = ' ';
        }
        $user->email = $githubUser->getEmail();
      }
      $user->github_token = $githubUser->token;
      $user->save();
      Auth::login($user);
      return redirect('/login');
    }
}
