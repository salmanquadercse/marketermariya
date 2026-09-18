@extends('admin.layout')

@section('title', 'Testimonials')

@section('content')
  <div style="display:flex; justify-content:space-between; align-items:center; gap:12px; margin-bottom:20px;">
    <h1 style="margin:0">Testimonials ({{ $testimonials->count() }})</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">+ Add review</a>
  </div>

  @if ($testimonials->isEmpty())
    <div class="card"><p class="muted" style="margin:0">No reviews yet — the testimonials section is hidden on the home page until you add one.</p></div>
  @else
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(320px, 1fr)); gap:20px;">
      @foreach ($testimonials as $testimonial)
        <div class="card" style="display:flex; flex-direction:column; gap:12px; padding:20px;">
          <div style="display:flex; align-items:center; gap:12px;">
            @if ($testimonial->avatar_url)
              <img src="{{ $testimonial->avatar_url }}" alt="" style="width:48px; height:48px; border-radius:50%; object-fit:cover; flex-shrink:0;">
            @else
              <span style="width:48px; height:48px; border-radius:50%; flex-shrink:0; display:flex; align-items:center; justify-content:center; color:#fff; font-weight:700; font-size:18px; background: {{ $testimonial->avatar_gradient }};">{{ $testimonial->initial }}</span>
            @endif
            <div style="min-width:0">
              <div style="font-weight:600; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $testimonial->name }}</div>
              <div class="muted">{{ $testimonial->role ?: '—' }}</div>
            </div>
            <span style="margin-left:auto; color:#f5a623; letter-spacing:1px; white-space:nowrap;" title="{{ $testimonial->rating }} of 5">{{ str_repeat('★', $testimonial->rating) }}<span style="color:#ddd">{{ str_repeat('★', 5 - $testimonial->rating) }}</span></span>
          </div>

          <p style="margin:0; font-size:14px; color:#444; line-height:1.6; display:-webkit-box; -webkit-line-clamp:4; -webkit-box-orient:vertical; overflow:hidden;">“{{ $testimonial->quote }}”</p>

          <div style="display:flex; gap:8px; margin-top:auto; align-items:center;">
            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-primary" style="padding:8px 16px; font-size:13px;">Edit</a>
            <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" onsubmit="return confirm('Delete the review from {{ addslashes($testimonial->name) }}?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <span class="muted" style="margin-left:auto">#{{ $loop->iteration }}</span>
          </div>
        </div>
      @endforeach
    </div>
  @endif
@endsection
