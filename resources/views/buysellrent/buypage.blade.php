@extends('layouts.buysellrent')

@section('content')
    <div class="Bsr-banner-buy">
        <div class='banner-title position-absolute top-50 start-50 translate-middle fw-bolder'> BUY</div>
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3 p-2 mt-3">
                    <button class="btn btn-light px-3 dropdown-toggle border border-2" data-bs-toggle="dropdown"
                        id="list">Select Status
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <a href="{{ route('buypage') }}" class="dropdown-item" value="buy">BUY</a>
                        <a href="{{ route('rentpage') }}" class="dropdown-item"value="rent">RENT</a>
                        <a href="{{ route('sellpage') }}" class="dropdown-item"value="sell">SELL</a>
                    </ul>
                    <button class="btn btn-light px-3 border border-2 dropdown-toggle" type="button"
                        id="baths ">Baths</button>
                    <button class="btn btn-light px-3 border border-2 dropdown-toggle" type="button"
                        id="button-addon2 ">Beds</button>
                    <input type="text" class="form-control py-2 bg-light" placeholder="Search..."
                        id="input-search" />
                    <button class="btn btn-light px-5" type="button" id="search">Search</button>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-light dropdown-toggle " data-bs-toggle="dropdown"
                aria-expanded="false">
                Default Order
            </button>
            <ul class="shadow dropdown-menu dropdown-menu-end ">
                <li><button class="dropdown-item" type="button">Price(Low to High)</button></li>
                <li><button class="dropdown-item" type="button">Price(High to Low)</button></li>
                <li><button class="dropdown-item" type="button">Date New to Old</button></li>
                <li><button class="dropdown-item" type="button">Date Old to Knew</button></li>
            </ul>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-3 mt-1">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border border-0">
                    <div class="img-wrapper">
                        <img href="#" class="bsr-pict card-img-top"
                            src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                            alt="..."></img>
                        <a href="#" class='fade content stretched-link text-white'>
                            <img class='logo-overlay'
                                src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
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
                                <strong>For Sale</strong>
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
