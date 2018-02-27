@extends('main-layout')

@section('title', 'Settings')

@section('content')
<h1>Settings</h1>
@if ($maintenanceMode == 0)
  <h3>Maintenance mode is currently off</h3>
@elseif ($maintenanceMode == 1)
  <h3>Maintenance mode is currently on</h3>
@endif
<form method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="toggleSettings">Press submit to toggle maintenance mode</label>
        <input type="submit" id="settings" name="toggleSettings" class="form-control">
    </div>
</form>
@endsection
