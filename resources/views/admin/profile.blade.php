@extends('main-layout')

@section('title', 'Profile')

@section('content')
    <h1>Welcome back, {{$user->name}}</h1>
    <p>Your email is {{$user->email}}</p>

    <form action='/tweets' method='post'>
      {{csrf_field()}}
      <div class='form-group'>
        <textarea name='body' rows='8' cols='80' maxlength='280' class='form-control'></textarea>
      </div>
      <button type='submit' class='btn btn-primary'>Post Tweet</button>
    </form>

@endsection
