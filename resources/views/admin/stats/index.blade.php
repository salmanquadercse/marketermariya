@extends('admin.layout')

@section('title', 'Completed Projects stats')

@section('content')
  <h1>My Completed Projects — figures</h1>

  <div class="card">
    <p class="muted" style="margin:0 0 6px">
      Each row is one card on the home page. The number counts up from 0 to <strong>Value</strong>, then <strong>Suffix</strong> is appended (e.g. value 150 + suffix "+" → 150+; value 90 + suffix "K$" → 90K$). One decimal place is allowed (3.5).
    </p>

    @if ($stats->isEmpty())
      <p class="muted" style="margin:14px 0 0">No figures yet — the section is hidden on the home page until you add one.</p>
    @endif

    @foreach ($stats as $stat)
      <form method="POST" action="{{ route('admin.stats.update', $stat) }}" class="stat-row">
        @csrf
        @method('PUT')
        @php($editing = old('_edit_id') == $stat->id)

        <div>
          <label for="label-{{ $stat->id }}">Title</label>
          <input id="label-{{ $stat->id }}" type="text" name="label" value="{{ $editing ? old('label') : $stat->label }}" maxlength="60" required>
        </div>
        <div>
          <label for="value-{{ $stat->id }}">Value</label>
          <input id="value-{{ $stat->id }}" type="number" name="value" value="{{ $editing ? old('value') : $stat->display_value }}" step="0.1" min="0" required>
        </div>
        <div>
          <label for="suffix-{{ $stat->id }}">Suffix</label>
          <input id="suffix-{{ $stat->id }}" type="text" name="suffix" value="{{ $editing ? old('suffix') : $stat->suffix }}" maxlength="5" placeholder="+">
        </div>
        <input type="hidden" name="_edit_id" value="{{ $stat->id }}">
        <button type="submit" class="btn btn-primary">Save</button>
        {{-- Delete lives outside this form (forms can't nest); the button below submits it by id. --}}
        <button type="submit" form="delete-{{ $stat->id }}" class="btn btn-danger" onclick="return confirm('Delete “{{ $stat->label }}”?');">Delete</button>

        @if ($editing && $errors->any())
          <div class="error" style="grid-column: 1 / -1">{{ $errors->first() }}</div>
        @endif
      </form>
      <form id="delete-{{ $stat->id }}" method="POST" action="{{ route('admin.stats.destroy', $stat) }}" hidden>
        @csrf
        @method('DELETE')
      </form>
    @endforeach
  </div>

  <div class="card">
    <h2 style="font-size:16px; margin:0 0 4px;">Add a figure</h2>
    @php($adding = old('_edit_id') === 'new')

    <form method="POST" action="{{ route('admin.stats.store') }}" class="stat-row">
      @csrf
      <div>
        <label for="new-label">Title</label>
        <input id="new-label" type="text" name="label" value="{{ $adding ? old('label') : '' }}" maxlength="60" placeholder="e.g. Campaigns Launched" required>
      </div>
      <div>
        <label for="new-value">Value</label>
        <input id="new-value" type="number" name="value" value="{{ $adding ? old('value') : '' }}" step="0.1" min="0" required>
      </div>
      <div>
        <label for="new-suffix">Suffix</label>
        <input id="new-suffix" type="text" name="suffix" value="{{ $adding ? old('suffix') : '' }}" maxlength="5" placeholder="+">
      </div>
      <input type="hidden" name="_edit_id" value="new">
      <button type="submit" class="btn btn-primary">Add</button>
      <span></span>

      @if ($adding && $errors->any())
        <div class="error" style="grid-column: 1 / -1">{{ $errors->first() }}</div>
      @endif
    </form>
  </div>
@endsection
