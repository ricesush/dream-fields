@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Dashboard</h1>
@endsection

@section('content')
<div class="container1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body shadow-lg">
                        <div class="h4 pt-2 text-center"><strong>Listing Requests</strong></div>
                        <hr>
                        <div class="tabcard">
                        <table class="table table-hover text-center">
                            <thead>
                              <tr>
                                <th>Unit Number</th>
                                <th>Unit Type</th>
                                <th>Unit Owner</th>
                                <th>Lsting Type</th>
                                <th>Price</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach( $properties as $property )                          
                              @if($property->isApproved == 'Pending')
                              <tr>
                                <td>{{ $property->unitNumber }}</td>
                                <td>{{ $property->unitType }}</td>
                                <td>{{ $property->user->name }}</td>
                                <td>{{ $property->unitStatus }}</td>
                                <td>{{ $property->unitPrice }}</td>
                                <td>buttons here</td>
                              </tr>
                              @endif
                            @endforeach
                             
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>         
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body shadow-lg">
                        <div class="h4 pt-2 text-center"><strong>Listed Units</strong></div>
                        <hr>
                        <div class="tabcard">
                        <table class="table table-hover text-center">
                            <thead>
                              <tr>
                                <th>Unit Number</th>
                                <th>Unit Type</th>
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
                                <td>{{ $property->user->name }}</td>
                                <td>{{ $property->unitStatus }}</td>
                                <td>{{ $property->unitPrice }}</td>
                                <td>buttons here</td>
                              </tr>
                              @endif
                            @endforeach
                              
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>               
        </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-3 mt-2">
            <div class="card p-3 mt-5 shadow-lg">
                <div class="imgBx sold text-center h4 pt-3 text-white shadow-lg"><strong><i class="fa-sharp fa-solid fa-dollar-sign"></i></strong></div>
                <div class="text-end pb-4">
                    Total Sales:
                    <div class="text-muted"><strong>$200.00</strong></div>
                </div>
                <hr />
            </div>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <div class="card p-3 mt-5 shadow-lg mb-5">
                <div class="imgBx listed text-center h4 pt-3 text-white shadow-lg"><strong><i class="fa-regular fa-rectangle-list"></i></strong></div>
                <div class="text-end">
                    Units Listed:
                    <div class="text-muted">For sale: 7</div>
                    <div class="text-muted">For rent: 4</div>
                </div>
                <hr />
            </div>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <div class="card p-3 mt-5 shadow-lg">
                <div class="imgBx house text-center h4 pt-3 text-white shadow-lg"><strong><i class="fa-solid fa-hotel"></i></strong></div>
                <div class="text-end pb-4">
                    Units Sold:
                    <div class="text-muted pe-3"><strong>9</strong></div>
                </div>
                <hr />
            </div>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <div class="card p-3 mt-5 shadow-lg mb-5">
                <div class="imgBx rented text-center h4 pt-3 text-white shadow-lg"><strong><i class="fa-solid fa-house-chimney-user"></i></strong></div>
                <div class="text-end pb-4">
                    Units Rented:
                    <div class="text-muted">7</div>

                </div>
                <hr />
            </div>
        </div>
    </div>
</div>
</div>
    </div>
</div>
@endsection


