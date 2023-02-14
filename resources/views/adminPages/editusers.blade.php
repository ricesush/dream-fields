@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Users</h1>
@endsection

@section('content')

  <div class="mb-6 ml-5">
    <p class="text-lg font-medium">Edit User info.</p>
  </div>
  <div class="mb-6 ml-5">
    <a href="{{ route('admin') }}" class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">← Go back</a>
  </div>
  <div>
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      @foreach($errors->all() as $error)
        <span class="block">{{$error}}</span>
      @endforeach
    </div>        
    @endif

    <div class="flex justify-center">
      <div class="bg-white p-8 rounded shadow-lg">
    <form method="POST" action="{{ route('updateuser') }}">
      @csrf
      <div class="flex flex-col space-y-4">
          <div class="flex flex-col">
              <label for="name" class="text-gray-600">Name</label>
              <input type="text" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="name" name="name" value="{{ $user->name }}" required>
          </div>
          <div class="flex flex-col">
              <label for="email" class="text-gray-600">Email</label>
              <input type="email" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="email" name="email" value="{{ $user->email }}" required>
          </div>
          <div class="flex flex-col">
              <label for="password" class="text-gray-600">Password</label>
              <input type="password" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="password" name="password" value="{{ $user->password }}" required>
          </div>
          <div class="flex flex-col">
              <label for="role" class="text-gray-600">Role</label>
              <select class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="role" id="role">
                  <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                  <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
              </select>                        
          </div>
          <div class="flex flex-col">
              <input type="hidden" name="id" value="{{ $user->id }}">
              <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update</button>
          </div>
      </div>
  </form>
    </div>
  </div>
     

@endsection


