@extends('admin.layout')

@section('title', 'Edit review')

@section('content')
  <h1>Edit review — {{ $testimonial->name }}</h1>

  <div class="card" style="max-width:720px">
    <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      @include('admin.testimonials._form')

      <div style="display:flex; gap:10px; align-items:center;">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="{{ route('admin.testimonials.index') }}" class="muted">Cancel</a>
      </div>
    </form>
  </div>
@endsection
