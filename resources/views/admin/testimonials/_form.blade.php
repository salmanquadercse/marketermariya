{{-- Shared fields for create + edit. Expects $testimonial (may be unsaved). --}}
<div class="field">
  <label for="name">Client name</label>
  <input id="name" type="text" name="name" value="{{ old('name', $testimonial->name) }}" maxlength="60" required autofocus placeholder="e.g. Daniel R.">
  @error('name') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="field">
  <label for="role">Role / company <span class="muted">(optional)</span></label>
  <input id="role" type="text" name="role" value="{{ old('role', $testimonial->role) }}" maxlength="80" placeholder="e.g. Marketing Manager">
  @error('role') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="field">
  <label for="quote">Review text</label>
  <textarea id="quote" name="quote" rows="6" maxlength="1000" required placeholder="What did the client say? (quotation marks are added automatically)">{{ old('quote', $testimonial->quote) }}</textarea>
  @error('quote') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="field">
  <label for="rating">Rating</label>
  <select id="rating" name="rating" required style="max-width:220px">
    @foreach ([5, 4, 3, 2, 1] as $r)
      <option value="{{ $r }}" @selected((int) old('rating', $testimonial->rating ?? 5) === $r)>{{ str_repeat('★', $r) }}{{ str_repeat('☆', 5 - $r) }} — {{ $r }} of 5</option>
    @endforeach
  </select>
  @error('rating') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="field">
  <label for="avatar">Photo <span class="muted">(optional — JPG, PNG or WebP, up to 2 MB; otherwise the client's initial is shown)</span></label>
  @if ($testimonial->avatar_url)
    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
      <img src="{{ $testimonial->avatar_url }}" alt="" style="width:56px; height:56px; border-radius:50%; object-fit:cover;">
      <label style="font-weight:400; display:flex; gap:8px; align-items:center; margin:0;">
        <input type="checkbox" name="remove_avatar" value="1" @checked(old('remove_avatar'))> Remove current photo
      </label>
    </div>
  @endif
  <input id="avatar" type="file" name="avatar" accept="image/png,image/jpeg,image/webp">
  @error('avatar') <div class="error">{{ $message }}</div> @enderror
</div>
