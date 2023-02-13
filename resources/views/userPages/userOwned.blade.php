@extends('layouts.app')
@section('content')

<div class="tab">
    <table class="styled-table">
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
          @if($property->user_id == Auth::user()->id)
          <tr class="active-row">
            <td>{{ $property->unitNumber }}</td>
            <td>{{ $property->unitType }}</td>
            <td>{{ $property->floorArea}} sq m</td>
            <td>{{ $property->numBed}}</td>
            <td>{{ $property->numBaths}}</td>
            <td>{{ $property->user->name }}</td>
            <td>{{ $property->unitStatus }}</td>
            <td>₱{{ $property->unitPrice }}</td>
            <td>
                <a class="btn btn-primary" style="display: inline-flex;" href="{{route('editunit', $property->id )}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-danger" style="display: inline-flex;" href="{{ route('deleteunit', $property->id) }}"><i class="fa-solid fa-trash"></i></a>

                
                {{-- <a href="{{ route('deleteunit', $property->id) }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a> --}}
            </td>
          </tr>
          @endif
          @endif    
        @endforeach
          
        </tbody>
      </table>
  </div> 
@endsection
