@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Users</h1>
@endsection

@section('content')
<div class="container">
  <div class="backbtn">
  <p>Edit User info.</p>
  <div class="backbtn">
  <a href="{{ route('admin') }}" class="btn btn-primary">← Go back</a>
</div>
  <div>
    @if($errors->any())
    <div class="mb-3">
        @foreach($errors->all() as $error)
            <span class="text-danger fw-bold">{{$error}}</span><br>
        @endforeach
    </div>        
    @endif
    <form method="POST" action="{{ route('updateuser') }}">
      @csrf
      <div class="form-container">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" required>
        </div>
        <div class="form-group">
          <label for="role">Role</label>
          <select class="form-control" name="role" id="role">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
          </select>                        
        </div>
        <div class="form-group">
          <input type="hidden" name="id" value="{{ $user->id }}">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
    
  </div>
</div>         

@endsection


