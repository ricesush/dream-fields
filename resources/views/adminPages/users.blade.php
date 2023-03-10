@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Users</h1>
@endsection

@section('content')

    <div class="tab">
      <div class="search-form">
      <form action="{{ route('usersearch') }}" method="get">
        <input type="text" name="search" placeholder="Search by name..." value="{{ request('search') }}">
        <button type="submit">Search</button>
      </form>
      </div>
        <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>   
            @foreach($users as $user)                      
              <tr class="active-row">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                  <a href="{{route('edituser', $user->id )}}" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <a class="btn btn-danger" href="{{ route('deleteuser', $user->id) }}">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>

          {{ $users->links() }}
      </div>            

@endsection


