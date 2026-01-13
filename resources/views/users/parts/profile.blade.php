<div class="card">
  <form action="{{ route('users.updateProfile', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card-header">
      <h5>Perfil</h5>
    </div>
    <div class="card-body">
      <div class="form-group mb-3">
        <label for="type">Tipo de pessoa</label>
        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
          @foreach (['PJ', 'PF'] as $type)
            <option value="{{ $type }}" @selected(old('type') === $user?->profile?->type || $user->profile->type === $type)>{{ $type }}</option>
          @endforeach
        </select>
        @error('type')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group mb-3">
        <label for="address">Endereço</label>
        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address"
          placeholder="Enter address" value="{{ old('address') ?? $user?->profile?->address }}">
        @error('address')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>
