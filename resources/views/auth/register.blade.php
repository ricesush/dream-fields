@extends('layouts.guest')

@section('content')
<div class="login-box">
    <p>Register</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="user-box">
        <input id="name" type="text" class="fw-bold form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <label class="fw-bold" for="name">{{ __('Name') }}</label>
      </div>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      <div class="user-box">
        <input id="email" type="email" class="fw-bold form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        <label class="fw-bold" for="email">Email</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
         @enderror
      </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
         @enderror
      <div class="user-box">
        <input id="password" type="password" class="fw-bold form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <label class="fw-bold" for="password">Password</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="user-box">
        <input id="password-confirm" type="password" class="fw-bold form-control" name="password_confirmation" required autocomplete="new-password">
        <label class="fw-bold" for="password-confirm">Confirm Password</label>
      </div>
      <button class="btn btn-dark float-end" type="submit">
        Submit
      </button>
    </form>
  </div>
@endsection
