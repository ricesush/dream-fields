@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Backlogs</h1>
@endsection

@section('content')
<div class="pending-list">
    <ul>
      @foreach( $properties as $property )
        @if($property->isApproved == 'Denied')
          <li class="pending-item">
            <div class="pending-unit-number">Unit Number: {{ $property->unitNumber }}</div>
            <div class="pending-unit-type">Unit Type: {{ $property->unitType }}</div>
            <div class="pending-unit-owner">Unit Owner: {{ $property->user->name }}</div>
            <div class="pending-listing-type">Listing Type: {{ $property->unitStatus }}</div>
            <div class="pending-price">Price: ₱{{ $property->unitPrice }}</div>
            <div class="pending-actions">
                <a class="btn btn-danger" style="display: inline-flex;" href="{{ route('deleteunit', $property->id) }}"><i class="fa-solid fa-trash"></i></a>
            </div>
          </li>
        @endif
      @endforeach
    </ul>
  </div>

@endsection


