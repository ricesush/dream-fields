@extends('layouts.app')

@section('content')
<div class="login-box">
    <p>Login</p>
    <hr class="pb-2">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="user-box">
        <input id="email" type="email" class="fw-bold form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label class="fw-bold" for="email">{{ __('Email Address') }}</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="user-box">
        <input id="password" type="password" class="fw-bold form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label class="fw-bold" for="password">{{ __('Password') }}</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="col-md-6 pb-5">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
    
      <button class="btn btn-primary float-end" type="submit">
        Submit
      </button>
    </form>
    <div class="pt-2 ps-2">Don't have an account? <a href="{{ route('register') }}" class="a2 fw-bold text-decoration-underline">Sign up!</a></div>
  </div>
@endsection
