@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
    <div class="container" style="height: 600px; overflow-y: scroll;">
        <table class="table table-hover text-center table-sm">
            <thead>
              <tr>
                <th>Unit Number</th>
                <th>Unit Type</th>
                <th>Floor Area</th>
                <th>Bedroom</th>
                <th>Bathroom</th>
                <th>Unit Owner</th>
                <th>Lsting Type</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach( $properties as $property )                          
              @if($property->isApproved == 'Approved')
              <tr>
                <td>{{ $property->unitNumber }}</td>
                <td>{{ $property->unitType }}</td>
                <td>{{ $property->floorArea}} sq m</td>
                <td>{{ $property->numBed}}</td>
                <td>{{ $property->numBaths}}</td>
                <td>{{ $property->user->name }}</td>
                <td>{{ $property->unitStatus }}</td>
                <td>₱{{ $property->unitPrice }}</td>
                <td>
                    <a href="{{route('editunit', $property->id )}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
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
                            Are you sure you want to delete this unit?
                          </div>
                          <div class="modal-footer">
                            <a type="button" href="{{ route('deleteunit', $property->id) }}" class="btn btn-danger">Yes</a>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- <a href="{{ route('deleteunit', $property->id) }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a> --}}
                </td>
              </tr>
              @endif    
            @endforeach
              
            </tbody>
          </table>
      </div>            

@endsection


