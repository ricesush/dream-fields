@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Users</h1>
@endsection

@section('content')

    <div class="tab" style="height: 600px; overflow-y: scroll;">
        <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>   
            @foreach($users as $user)                      
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>phone here</td>
                <td>{{$user->role}}</td>
                <td>
                  <a href="{{route('edituser', $user->id )}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a class="btn btn-sm btn-danger" href="{{ route('deleteuser', $user->id) }}">
                    <i class="fa-solid fa-trash"></i>
                  </a>

                </td>
              </tr>
              @endforeach

              
            </tbody>
          </table>
      </div>            

@endsection


