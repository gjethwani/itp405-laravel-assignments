@extends('main-layout')

@section('title', 'Login')

@section('content')
<h1>Login</h1>
<p>Don't have an account? Please <a href="/signup">Signup</a></p>
<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <input type="submit" value="Login" class="btn btn-primary">
</form>
<a href='/login/twitter'>Login With Twitter</a>
@endsection
