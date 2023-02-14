@extends('layouts.app')

@section('header')
  <h1 class="h2">Dashboard</h1>
@endsection

@section('content')

<div class="main-container">
    <div class="cards" style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(2, 1fr); grid-gap: 20px;">

      <div class="card card-1">       
        <h4 class="mb-3">Units Listed</h4>
        <div class="text-muted">For sale: 
          @php
            $forsale = 0;
          @endphp
          @foreach($properties as $property)
          @if($property->isApproved == 'Approved')
            @if($property->unitStatus == 'For Sale')
              @if($property->user_id == Auth::user()->id)
                @php
                    $forsale += 1;
                @endphp
              @endif
            @endif
          @endif  
          @endforeach
          {{ $forsale }} 
        </div>

        <div class="text-muted">For rent: 
          @php
            $forrent = 0;
          @endphp
          @foreach($properties as $property)
          @if($property->isApproved == 'Approved')
            @if($property->unitStatus == 'For Rent')
              @if($property->user_id == Auth::user()->id)
                @php
                    $forrent += 1;
                @endphp
              @endif
            @endif
          @endif  
          @endforeach
          {{ $forrent }} 
        </div>
      </div>

      <div class="card card-1">
        <h4 class="mb-3">Total Sales</h4>
        <div class="text-muted pe-3">
          <strong>
            @php
              $total = 0;
            @endphp
            @foreach($properties as $property)
            @if($property->isApproved == 'Approved')
              @if($property->unitStatus == 'Sold')
                @if($property->user_id == Auth::user()->id)
                    @php
                    $total += $property->unitPrice;
                    @endphp
                @endif
              @endif
            @endif
            @endforeach
            ₱{{ $total }}
          </strong>
        </div>
      </div>

      <div class="card card-1">  
        <h4 class="mb-3">Units Rented</h4>
        <div class="text-muted">
          @php
            $sold = 0;
          @endphp
          @foreach($properties as $property)
          @if($property->isApproved == 'Approved')
            @if($property->unitStatus == 'Rented')
                @if($property->user_id == Auth::user()->id)
              @php
                $sold += 1;
              @endphp
                @endif
            @endif
          @endif  
          @endforeach
          {{ $sold }} 
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
