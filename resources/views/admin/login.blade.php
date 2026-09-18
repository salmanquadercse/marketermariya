@extends('admin.layout')

@section('title', 'Log in')

@section('content')
  <div class="card" style="max-width: 420px; margin: 40px auto;">
    <h1>Admin login</h1>

    <form method="POST" action="{{ route('admin.login') }}">
      @csrf

      <div class="field">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
        @error('email') <div class="error">{{ $message }}</div> @enderror
      </div>

      <div class="field">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password') <div class="error">{{ $message }}</div> @enderror
      </div>

      <div class="field">
        <label style="font-weight:400; display:flex; gap:8px; align-items:center;">
          <input type="checkbox" name="remember" value="1"> Remember me
        </label>
      </div>

      <button type="submit" class="btn btn-primary">Log in</button>
    </form>
  </div>
@endsection
