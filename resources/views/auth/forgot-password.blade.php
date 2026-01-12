@extends('layouts.auth')
@section('body-class', 'login-page')
@section('content')
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Reset password</p>

        @session('status')
          <div class="alert alert-success" role="alert">{{ $value }}</div>
        @endsession

        <form action="{{ route('password.email') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
              placeholder="Email" value="{{ old('email') }}" />
            <div class="input-group-text">
              <span class="bi bi-envelope"></span>
            </div>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Reset password</button>
            </div>
          </div>
      </div>
      <!--end::Row-->
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
@endsection
