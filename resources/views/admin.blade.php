@extends('layouts.adminLayout')

@section('header')
  <h1 class="h2">Dashboard</h1>
@endsection

@section('content')
  <div class="main-container">
    <div class="cards" style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(2, 1fr); grid-gap: 20px;">

      <div class="card card-5">
        <h4 class="mb-3">Users Count:</h4>
        <div class="text-muted">
          <strong>{{ count($users) }}</strong>
        </div>
      </div>

      <div class="card card-1">       
        <h4 class="mb-3">Units Listed</h4>
        <div class="text-muted">For sale: 
          @php
            $forsale = 0;
          @endphp
          @foreach($properties as $property)
          @if($property->isApproved == 'Approved')
            @if($property->unitStatus == 'For Sale')
              @php
                $forsale += 1;
              @endphp
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
              @php
                $forrent += 1;
              @endphp
            @endif
          @endif  
          @endforeach
          {{ $forrent }} 
        </div>
      </div>

      <div class="card card-3">
        <h4 class="mb-3">Total Sales</h4>
        <div class="text-muted pe-3">
          <strong>
            @php
              $total = 0;
            @endphp
            @foreach($properties as $property)
            @if($property->isApproved == 'Approved')
              @if($property->unitStatus == 'Sold')
                @php
                  $total += $property->unitPrice;
                @endphp
              @endif
            @endif
            @endforeach
            ₱{{ $total }}
          </strong>
        </div>
      </div>

      <div class="card card-4">  
        <h4 class="mb-3">Units Rented</h4>
        <div class="text-muted">
          @php
            $sold = 0;
          @endphp
          @foreach($properties as $property)
          @if($property->isApproved == 'Approved')
            @if($property->unitStatus == 'Rented')
              @php
                $sold += 1;
              @endphp

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
