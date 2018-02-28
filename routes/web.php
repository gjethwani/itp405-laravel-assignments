<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('genres');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/artists', 'ArtistsController@index');
Route::get('/artists/{id}/albums', 'ArtistsController@albums');
Route::get('/albums/{id}/reviews', 'AlbumsController@reviews');
Route::get('/albums/{id}/reviews/new', 'AlbumsController@newReview');
Route::post('/albums/{id}/reviews', 'AlbumsController@submitReview');

Route::middleware(['maintenance'])->group(function () {
    Route::get('/genres', 'GenresController@index');
    Route::get('/tracks','TracksController@index');
    Route::get('/signup', 'SignupController@index');
    Route::post('/signup', 'SignupController@signup');
    Route::get('/playlists', 'PlaylistsController@index');
    Route::get('/playlists/new', 'PlaylistsController@create');
    Route::get('/playlists/{id}', 'PlaylistsController@show');
    Route::post('/playlists', 'PlaylistsController@store');
    Route::get('/playlists/{id}/edit', 'PlaylistsController@edit');
    Route::post('/playlists/{id}/edit', 'PlaylistsController@update');
    Route::get('/playlists/{id}/delete', 'PlaylistsController@delete');
});

Route::middleware(['protected'])->group(function () {
    Route::get('/settings', 'AdminController@settings');
    Route::post('/settings', 'AdminController@toggle');
    Route::get('/profile', 'AdminController@index');
    Route::get('/invoices', 'InvoicesController@index');
    Route::get('/invoices/{id}', 'InvoicesController@show');
    Route::get('/phpinfo', function() {
      echo phpinfo();
    });
});
