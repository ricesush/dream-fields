@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
        <div class="tabcard">
        <table class="table table-hover text-center">
            <thead>
              <tr>
                <th>Unit Number</th>
                <th>Unit Type</th>
                <th>Unit Status</th>
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
                <td>{{ $property->unitStatus }}</td>
                <td>{{ $property->floorArea}}</td>
                <td>{{ $property->numBed}}</td>
                <td>{{ $property->numBaths}}</td>
                <td>{{ $property->user->name }}</td>
                <td>{{ $property->unitStatus }}</td>
                <td>₱{{ $property->unitPrice }}</td>
                <td>
                    <a href="{{route('editunits', $property->id )}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
              </tr>
              @endif    
            @endforeach
              
            </tbody>
          </table>
        </div>               

@endsection


