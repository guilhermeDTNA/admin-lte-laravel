@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
  <a href="#" class="btn btn-primary">Adicionar</a>
@endsection

@section('content')
  <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        placeholder="Enter name" value="{{ old('name') }}">
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
        placeholder="Enter email" value="{{ old('email') }}">
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
        placeholder="Enter password">
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection
