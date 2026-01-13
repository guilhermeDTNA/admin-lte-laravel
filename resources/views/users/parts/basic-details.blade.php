<div class="card">
  <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card-header">
      <h5>Dados Básicos</h5>
    </div>
    <div class="card-body">
      <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
          placeholder="Enter name" value="{{ old('name') ?? $user->name }}">
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group mb-3">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
          placeholder="Enter email" value="{{ old('email') ?? $user->email }}">
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
          id="password" placeholder="Enter password">
        @error('password')
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
