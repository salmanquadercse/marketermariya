<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') · {{ config('app.name') }}</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <style>
    *, *::before, *::after { box-sizing: border-box; }
    body { margin: 0; font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; background: #f4f5f7; color: #1a1a2e; }
    a { color: inherit; }
    .topbar { background: #1a1a2e; color: #fff; padding: 8px 24px; min-height: 56px; display: flex; flex-wrap: wrap; gap: 8px 16px; align-items: center; justify-content: space-between; }
    .topbar .brand { font-weight: 700; letter-spacing: .02em; text-decoration: none; }
    .topbar nav { display: flex; flex-wrap: wrap; gap: 8px 16px; align-items: center; font-size: 14px; }
    .topbar nav a { color: #cfd3dc; text-decoration: none; }
    .topbar nav a:hover, .topbar nav a.active { color: #fff; }
    .topbar nav a.active { text-decoration: underline; text-underline-offset: 6px; }
    .stat-row { display: grid; grid-template-columns: minmax(0, 2fr) minmax(0, 1fr) 90px auto auto; gap: 10px; align-items: end; padding: 14px 0; border-top: 1px solid #eee; }
    .stat-row > div { min-width: 0; }
    .stat-row:first-of-type { border-top: 0; }
    .stat-row .btn { padding: 9px 14px; }
    @media (max-width: 720px) { .stat-row { grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); } .stat-row .btn { width: 100%; } }
    .container { max-width: 1100px; margin: 32px auto; padding: 0 20px; }
    h1 { font-size: 22px; margin: 0 0 20px; }
    .card { background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,.05); padding: 24px; }
    .card + .card { margin-top: 24px; }
    label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; }
    input[type=text], input[type=number], input[type=email], input[type=password], input[type=file], textarea, select {
      width: 100%; min-width: 0; padding: 10px 12px; border: 1px solid #d5d8de; border-radius: 8px; font-size: 14px; background: #fff;
    }
    input:focus, textarea:focus, select:focus { outline: 2px solid #4f7cff; outline-offset: 1px; border-color: transparent; }
    textarea { resize: vertical; font-family: inherit; line-height: 1.5; }
    .field { margin-bottom: 16px; }
    .btn { display: inline-block; border: 0; border-radius: 8px; padding: 10px 18px; font-size: 14px; font-weight: 600; cursor: pointer; text-decoration: none; }
    .btn-primary { background: #4f7cff; color: #fff; }
    .btn-primary:hover { background: #3b66e8; }
    .btn-danger { background: #fff; color: #c62828; border: 1px solid #f0c4c4; padding: 6px 12px; font-size: 13px; }
    .btn-danger:hover { background: #fdecec; }
    .btn-link { background: none; color: #cfd3dc; padding: 0; font-weight: 400; font-size: 14px; }
    .btn-link:hover { color: #fff; }
    .flash { border-radius: 8px; padding: 12px 16px; margin-bottom: 20px; font-size: 14px; }
    .flash-success { background: #e6f7ec; color: #1b6b3a; }
    .error { color: #c62828; font-size: 13px; margin-top: 6px; }
    .muted { color: #6b7280; font-size: 13px; }
  </style>
</head>
<body>
  <header class="topbar">
    <a class="brand" href="{{ route('admin.works.index') }}">{{ config('app.name') }} · Admin</a>
    <nav>
      @auth
        <a href="{{ route('admin.works.index') }}" @class(['active' => request()->routeIs('admin.works.*')])>Screenshots</a>
        <a href="{{ route('admin.stats.index') }}" @class(['active' => request()->routeIs('admin.stats.*')])>Stats</a>
        <a href="{{ route('admin.testimonials.index') }}" @class(['active' => request()->routeIs('admin.testimonials.*')])>Testimonials</a>
        <a href="{{ url('/') }}" target="_blank" rel="noopener">View site ↗</a>
        <span class="muted" style="color:#9aa0ad">{{ auth()->user()->email }}</span>
        <form method="POST" action="{{ route('admin.logout') }}">
          @csrf
          <button type="submit" class="btn btn-link">Log out</button>
        </form>
      @endauth
    </nav>
  </header>

  <main class="container">
    @if (session('status'))
      <div class="flash flash-success">{{ session('status') }}</div>
    @endif

    @yield('content')
  </main>
</body>
</html>
