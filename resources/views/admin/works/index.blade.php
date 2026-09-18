@extends('admin.layout')

@section('title', 'Creative Works')

@section('content')
  <h1>My Creative Works — screenshots</h1>

  <div class="card">
    <form method="POST" action="{{ route('admin.works.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="field">
        <label for="image">Screenshot</label>
        <input id="image" type="file" name="image" accept="image/png,image/jpeg,image/webp" required>
        <div class="muted" style="margin-top:6px">JPG, PNG or WebP, up to 5 MB. Shown in a 320px-tall card, so landscape screenshots look best.</div>
        @error('image') <div class="error">{{ $message }}</div> @enderror
      </div>

      <div class="field">
        <label for="title">Title <span class="muted">(optional, used as the image's alt text)</span></label>
        <input id="title" type="text" name="title" value="{{ old('title') }}" maxlength="120" placeholder="e.g. GTM server-side container">
        @error('title') <div class="error">{{ $message }}</div> @enderror
      </div>

      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>

  <div class="card">
    <h2 style="font-size:16px; margin:0 0 16px;">Uploaded ({{ $works->count() }})</h2>

    @if ($works->isEmpty())
      <p class="muted" style="margin:0">Nothing uploaded yet — the home page is still showing the built-in placeholder slides.</p>
    @else
      <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(240px, 1fr)); gap:20px;">
        @foreach ($works as $work)
          <div style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; background:#fafafa;">
            <a href="{{ $work->image_url }}" target="_blank" rel="noopener" title="Open full size">
              <img src="{{ $work->image_url }}" alt="{{ $work->title }}" style="display:block; width:100%; height:160px; object-fit:cover; object-position:top;">
            </a>
            <div style="padding:10px 12px; display:flex; justify-content:space-between; align-items:center; gap:8px;">
              <div style="min-width:0">
                <div style="font-size:14px; font-weight:600; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $work->title ?: 'Untitled' }}</div>
                <div class="muted">#{{ $loop->iteration }} · {{ $work->created_at->format('d M Y') }}</div>
              </div>
              <form method="POST" action="{{ route('admin.works.destroy', $work) }}" onsubmit="return confirm('Delete this screenshot?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
@endsection
