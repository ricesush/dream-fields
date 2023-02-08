@extends('layouts.adminLayout')

@section('content')
<div class="container1">
    <div class="h4 pt-3 ps-5 mb-5">
        Welcome! <span class="fw-bold">{{Auth::user()->name}}</span>
    </div>
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
                              <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
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
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                              </tr>
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
