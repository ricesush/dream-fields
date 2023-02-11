@extends('layouts.buysellrent')

@section('content')
<div class="Bsr-banner-buy container-fluid position-relative">
    <div class="container d-grid align-items-end bg-height ">
        <form class="bgColor2 py-2 rounded-1 mb-3" method="GET" action="{{ route('search') }}">
            @csrf
            <div class="row col-md-12 col-lg-12 d-flex justify-content-center m-0">
                <div class=" col-lg-4 col-md-12 d-flex me-0">
                    <select class="form-select bg-transparent border-0 border-bottom rounded-0" name="links" id="unitProperties"  onchange="window.location.href=this.value;">
                        <option selected hidden value="Listing" class="text-dark">Listing</option>
                        <option value="{{ route('buypage') }}" >For Sale</option>
                        <option value="{{ route('rentpage') }}" selected>For Rent</option>
                    </select>
                    <select class="form-select bg-transparent border-0 border-bottom rounded-0 mx-3" name="baths" id="baths">
                    
                        <option selected hidden value="0">Baths</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>


    <div class="Bsr-banner-rent">
        <div class='banner-title position-absolute top-50 start-50 translate-middle fw-bolder'> Rent</div>
    </div>
    <div class="container-lg">
        @include('components.bsrSearch')
        @include('components.bsrFilter')
      
        {{-- Card section --}}
        <div class="row row-cols-1 row-cols-md-3 g-3 mt-1">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border border-0">
                    <div class="img-wrapper">
                        <img href="#" class="bsr-pict card-img-top"
                            src='https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png'
                            alt="..."></img>
                        <a href="#" class="fade content stretched-link text-white">
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
                            <div class="card-body">
                                <p class="card-title h4 fw-bold text-center">{{ $property->unitNumber }}</p>
                                <hr>
                                </hr>
                                <div class="row text-center g-1 mt-2">
                                    <div class="col-md-3 col-2">
                                        <i class="fa-solid fa-bed"></i>
                                        <br />
                                        <a class='btn btn-sm'>{{ $property->numBed }}</a>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <i class="fa-solid fa-bath"></i>
                                        <br />
                                        <a class='btn btn-sm'>{{ $property->numBaths }}</a>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <i class="fa-solid fa-car"></i>
                                        <br />
                                        <a class='btn btn-sm'>{{ $property->hasParking }}</a>
                                        <i class="fa-duotone fa-bed-front"></i>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <i class="fa-solid fa-ruler"></i>
                                        <br />
                                        <a class='btn btn-sm'>{{ $property->floorArea }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 text-center">
                                <div class="d-flex align-items-center ">
                                    <div class="col-md-3 pt-3 pb-3 card-footer-bg textLight">
                                        <strong>{{ $property->unitStatus }}</strong>
                                    </div>
                                    <div class="col-md-9 pt-3 pb-3">
                                        <small>P {{ $property->unitPrice }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
