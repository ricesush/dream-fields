@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Pending Units</h1>
@endsection

@section('content')
<div class="pending-list">
  <ul>
    @foreach( $properties as $property )
      @if($property->isApproved == 'Pending')
        <li class="pending-item">
          <div class="pending-header">
            <div class="pending-unit-number">Unit Number: {{ $property->unitNumber }}</div>
            <div class="pending-unit-type">Unit Type: {{ $property->unitType }}</div>
          </div>
          <div class="pending-body">
            <div class="pending-unit-owner">Unit Owner: {{ $property->user->name }}</div>
            <div class="pending-listing-type">Listing Type: {{ $property->unitStatus }}</div>
            <div class="pending-price">Price: ₱{{ $property->unitPrice }}</div>
          </div>
          <div class="pending-footer">
            <div class="pending-actions">
              <form method="POST" action={{ route('approveunit') }} style="display:inline-block">
                @csrf
                  <input type="hidden" value="{{ $property->id }}" name="id">
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-check"></i>
                  </button>
              </form>
              <form method="POST" action={{ route('denyunit') }} style="display:inline-block">
                @csrf
                  <input type="hidden" value="{{ $property->id }}" name="id">
                  <button type="submit" class="btn btn-danger">
                    <i class="fas fa-times"></i>
                  </button>
              </form>
            </div>
          </div>
        </li>
      @endif
    @endforeach
  </ul>
</div>

@endsection


