@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Users</h1>
@endsection

@section('content')
        <div class="tabcard">
        <table class="table table-hover text-center">
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
                <td>buttons here</td>
              </tr>
              @endforeach

              
            </tbody>
          </table>
        </div>               

@endsection


