<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <ul class="nav">
            @if(Auth::check())
                <li class="nav-item">
                    <a href="/profile" class="nav-link">My Profile</a>
                </li>
                <li class="nav-item">
                    <a href="/invoices" class="nav-link">Invoices</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="/settings" class="nav-link">Settings</a>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/signup" class="nav-link">Signup</a>
                </li>
            @endif
        </ul>
        @yield('content')
    </div>
  </body>
</html>
