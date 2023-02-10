@extends('layouts.adminLayout')

@section('header')
<h1 class="h2">Dashboard</h1>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sales -->
        <div class="col-12 col-md-3 mt-5">
            <div class="card p-3 shadow-lg">
                <div class="imgBx sold text-center h4 pt-3 text-white shadow-lg">
                    <strong><i class="fa-sharp fa-dollar-sign"></i></strong>
                </div>
                <div class="text-end pb-4">
                    <h4 class="mb-3">Users Count:</h4>
                    <div class="text-muted"><strong>{{ count($users) }}</strong></div>
                </div>
            </div>
        </div>

        <!-- Listed -->
        <div class="col-12 col-md-3 mt-5">
            <div class="card p-3 shadow-lg">
                <div class="imgBx listed text-center h4 pt-3 text-white shadow-lg">
                    <strong><i class="fa-regular fa-list-ul"></i></strong>
                </div>
                <div class="text-end">
                    <h4 class="mb-3">Units Listed</h4>
                    <div class="text-muted">For sale: 7</div>
                    <div class="text-muted">For rent: 4</div>
                </div>
            </div>
        </div>

        <!-- Sold -->
        <div class="col-12 col-md-3 mt-5">
            <div class="card p-3 shadow-lg">
                <div class="imgBx house text-center h4 pt-3 text-white shadow-lg">
                    <strong><i class="fa-solid fa-dollar-sign"></i></strong>
                </div>
                <div class="text-end pb-4">
                    <h4 class="mb-3">Total Sales</h4>
                    <div class="text-muted pe-3">
                        <strong>
                          @php
                            $total = 0;
                          @endphp
                          @foreach($properties as $property)
                            @if($property->unitStatus == 'Sold')
                              @php
                                $total += $property->unitPrice;
                              @endphp
                            @endif
                          @endforeach
                          ₱{{ $total }}
                        </strong>
                      </div>
                </div>
            </div>
        </div>

        <!-- Rented -->
        <div class="col-12 col-md-3 mt-5">
            <div class="card p-3 shadow-lg">
                <div class="imgBx rented text-center h4 pt-3 text-white shadow-lg">
                    <strong><i class="fa-solid fa-home"></i></strong>
                </div>
                <div class="text-end pb-4">
                    <h4 class="mb-3">Units Rented</h4>
                    <div class="text-muted">7</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
