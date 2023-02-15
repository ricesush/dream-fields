@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
<div class="tab">
  <div class="search-form">
    <form action="{{ route('searchApprovedProperties') }}" method="GET">
      <input type="text" name="search" placeholder="Search by Unit Number..." value="{{ request('search') }}">
      <button type="submit">Search</button>
    </form>
  </div>
  <table class="styled-table">
      <thead>
        <tr>
          <th><a href="{{route('condounits1')}}">Unit Number</a></th>
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
        <tr class="active-row">
          <td>{{ $property->unitNumber }}</td>
          <td>{{ $property->title }}</td>
          <td>{{ $property->floorArea}} sq m</td>
          <td>{{ $property->numBed}}</td>
          <td>{{ $property->numBaths}}</td>
          <td>{{ $property->user->name }}</td>
          <td>{{ $property->unitStatus }}</td>
          <td>₱{{ $property->unitPrice }}</td>
          <td>
              <a class="btn btn-primary" style="display: inline-flex;" href="{{route('editunit', $property->id )}}"><i class="fa-solid fa-pen-to-square"></i></a>
              <a class="btn btn-danger" style="display: inline-flex;" href="{{ route('deleteunit', $property->id) }}"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        @endif    
      @endforeach
      </tbody>
    </table>
    {{ $properties->links() }}
</div>

@endsection


