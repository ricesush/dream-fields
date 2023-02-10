@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
<div class="container">
  <p>Edit Unit info.</p>
  <a href="{{ route('admin') }}" class="btn btn-light btn-sm">← Go back</a>
  <div class="card py-5 px-4 mt-3 col-md-8 shadow-lg">
      <form method="POST" action="{{ route('updateuser') }}">
          @csrf
          <div class="container">
            <div class="row">
          <div class="mb-3 col-md-2">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
          </div>
          <div class="mb-3 col-md-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
          </div>
          <div class="mb-3 col-md-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" required>
          </div>
          <div class="mb-3 col-md-2 ps-5">
            <label for="role">Role</label>
              <select name="role" id="role">
                  <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                  <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
              </select>                         
            </div>
          
              <input type="hidden" name="id" value="{{ $user->id }}">
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>         

@endsection


