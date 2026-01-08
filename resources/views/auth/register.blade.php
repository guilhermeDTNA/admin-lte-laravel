@extends('layouts.auth')
@section('body-class', 'register-page')
@section('content')
  <div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>

        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
              placeholder="Full Name" value="{{ old('name') }}" />
            <div class="input-group-text">
              <span class="bi bi-person"></span>
            </div>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
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
          <div class="input-group mb-3">
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
              placeholder="Password" />
            <div class="input-group-text">
              <span class="bi bi-lock-fill"></span>
            </div>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input name="password_confirmation" type="password" class="form-control"
              placeholder="Password Confirmation" />
            <div class="input-group-text">
              <span class="bi bi-lock-fill"></span>
            </div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <!-- /.col -->
            <div class="col-12 mb-3">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
@endsection
