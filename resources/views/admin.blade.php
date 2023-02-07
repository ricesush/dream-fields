@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div>
                        <form action="{{ route('createproperty') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input class="form-control" type="number" name="unitNumber">

                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary">
                                        ➡
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div className="col-md-4">
            <table class="table">
                <thead>
                <tr>
                    <th>Unit Number</th>
                    <th>User ID</th>
                    <th>Action</th>
                    {{-- <th scope="col">Handle</th> --}}
                </tr>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                <tr>
                    <td>{{$property->unitNumber}}</td>
                    <td>{{$property->user_id}}</td>
                    <td>
                        <a class="btn btn-sm btn-light" href="{{ route('editproperty', $property->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('destroy', $property->id) }}">Delete</a>
                    </td>

                </tr>
            
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
