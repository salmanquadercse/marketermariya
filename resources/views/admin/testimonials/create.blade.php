@extends('admin.layout')

@section('title', 'Add review')

@section('content')
  <h1>Add a review</h1>

  <div class="card" style="max-width:720px">
    <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
      @csrf
      @include('admin.testimonials._form')

      <div style="display:flex; gap:10px; align-items:center;">
        <button type="submit" class="btn btn-primary">Add review</button>
        <a href="{{ route('admin.testimonials.index') }}" class="muted">Cancel</a>
      </div>
    </form>
  </div>
@endsection
