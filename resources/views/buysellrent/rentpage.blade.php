@extends('layouts.buysellrent')

@section('content')
    <div class="Bsr-banner-rent">
        <div class='banner-title position-absolute top-50 start-50 translate-middle fw-bolder'> RENT</div>
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3 p-2 mt-3">
                    <select class="btn btn-light bg-white focus-control"  name="baths" id="baths">
                        <a href="{{ route('buypage') }}" class="dropdown-item" value="buy"> <option> BUY</option></a>
                        <a href="{{ route('rentpage') }}" class="dropdown-item" value="rent"><option selected>RENT</option></a>
                        <a href="{{ route('sellpage') }}" class="dropdown-item" value="sell"><option>SELL</option></a>
                    </select>
                    <select class="btn btn-light bg-white focus-control" name="baths" id="baths">
                        <option value="0">Baths</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
    
                    <select class="btn btn-light bg-white focus-control" name="baths" id="beds">
                        <option value="0">Beds</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
    
                    <input type="text" class="focus-control form-control py-2 bg-light" placeholder="Search..." id="input-search" />
                    <button class="btn btn-light px-5" type="button" id="search">Search</button>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex justify-content-end">
                <select class="form-select focus-control" aria-label="Default select example">
                    <option selected>Default Order</option>
                    <option value="1">Price(Low to High)</option>
                    <option value="2">Price(High to Low)</option>
                    <option value="3">Date New to Old</option>
                    <option value="4">Date Old to Knew</option>
                </select>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-3 mt-1">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border border-0">
                    <div class="img-wrapper">
                        <img href="#" class="bsr-pict card-img-top"
                            src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                            alt="..."></img>
                        <a href="#" class='fade content stretched-link text-white'>
                            <img class='logo-overlay' src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                            <span class='mt-3'> View Details</span></a>
                    </div>
                    <div class="card-body bg-card-body">
                        <p class="card-title h4 fw-bold text-center">Condo Condo</p>
                        <hr>
                        </hr>
                        <div class="row text-center g-1 mt-2">
                            <div class="col-md-3 col-2">
                                <i class="fa-solid fa-bed"></i>
                                <br />
                                <a class='btn btn-sm'>2 Beds</a>
                            </div>
                            <div class="col-md-3 col-3">
                                <i class="fa-solid fa-bath"></i>
                                <br />
                                <a class='btn btn-sm'>1 Baths</a>
                            </div>
                            <div class="col-md-3 col-3">
                                <i class="fa-solid fa-car"></i>
                                <br />
                                <a class='btn btn-sm'>1 Garage</a>
                                <i class="fa-duotone fa-bed-front"></i>
                            </div>
                            <div class="col-md-3 col-3">
                                <i class="fa-solid fa-ruler"></i>
                                <br />
                                <a class='btn btn-sm'>150 Sq m</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 text-center">
                        <div class="d-flex align-items-center ">
                            <div class="col-md-3 pt-3 pb-3 card-footer-bg textLight">
                                <strong>For Rent</strong>
                            </div>
                            <div class="col-md-9 pt-3 pb-3">
                                <small>P 1,000,000</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
