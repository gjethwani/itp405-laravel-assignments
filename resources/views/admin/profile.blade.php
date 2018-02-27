@extends('main-layout')

@section('title', 'Profile')

@section('content')
    <h1>Welcome back, {{$user->name}}</h1>
    <p>Your email is {{$user->email}}</p>
@endsection
