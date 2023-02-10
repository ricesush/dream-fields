@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Users</h1>
@endsection

@section('content')

    <div class="container">
      <div class="tabcard">
        <table class="table table-hover text-center table-sm">
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
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-trash"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Warning!</h1>
                        </div>
                        <div class="modal-body p-5 fw-bold h3">
                          Are you sure you want to delete this User?
                        </div>
                        <div class="modal-footer">
                          <a type="button" href="{{ route('deleteuser', $user->id) }}" class="btn btn-danger">Yes</a>
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach

              
            </tbody>
          </table>
        </div>
      </div>            

@endsection


