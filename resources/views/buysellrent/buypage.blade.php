@extends('layouts.buysellrent')

@section('content')
<div class="Bsr-banner-buy container-fluid position-relative">
    <div class="container d-grid align-items-end">
        <div class="col">
            <h1 class="text-center fw-bold display-4 mt-5"><span class="text-light rounded-end-2">FOR SALE</span></span>
            </h1>
        </div>
        <form class="bgColor2 py-3 rounded-1 shadow" method="GET" action="{{ route('search') }}">
            @csrf

            <div class="row col-md-12 col-lg-12 d-flex justify-content-center align-items-end m-0">
                <div class=" col-lg-4 col-md-12 d-flex me-0">
                    <select class="option-deco form-select bg-transparent border-0 border-bottom rounded-0 border-b" name="propStatus" id="unitProperties">
                        <option selected hidden value="" class="text-dark bg-primary">Listing</option>
                        <option value="Sale" class="">For Sale</option>
                        <option value="Rent">For Rent</option>
                    </select>
                    <select class="option-deco form-select bg-transparent border-0 border-bottom rounded-0 mx-3 border-b" name="bathCount" id="baths">
                        <option selected hidden value="0">Baths</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>


                    <select class="option-deco form-select bg-transparent border-0 border-bottom rounded-0 pt-2 border-b" name="bedCount" id="beds">
                        <option Selected hidden value="0">Beds</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-lg-8 d-flex text-light align-items-end">
                    <input type="text" class="bg-primary input text-dark form-control bg-transparent border-0 border-bottom rounded-0 border-b" placeholder="Search..." id="input-search" name="search_input" />
                    <button class="btn bg-transparent border-0 border-bottom rounded-0 border-b" type="submit" id="search"><i class="fa fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-3 ">
        @foreach ($properties as $property)
        @if ($property->isApproved == 'Approved' && $property->unitStatus == 'For Sale')
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow border border-0 bg-card-body cards-bground">
                <div class="img-wrapper">
                    @if ($property->title == '1 Bedroom Standard')
                    <img href="#" class="bsr-pict card-img-top" src="../images/room/1-Bedroom.jpg" alt="..."></img>
                    @elseif($property->title == '1 Bedroom Deluxe')
                    <img href="#" class="bsr-pict card-img-top" src="../images/room/1-Bedroom2.jpg" alt="..."></img>
                    @elseif($property->title == '2 Bedrooms Standard')
                    <img href="#" class="bsr-pict card-img-top" src="../images/room/2-Bedroom.jpg" alt="..."></img>
                    @elseif($property->title == '2 Bedrooms Deluxe')
                    <img href="#" class="bsr-pict card-img-top" src="../images/room/2-Bedroom2.jpg" alt="..."></img>
                    @endif
                    <a href="#" class='fade content stretched-link text-white'>
                        <img class='logo-overlay' src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                        <span class='mt-3'> View Details</span></a>

                </div>
                <div class="card-body">
                    <p class="card-title h4 fw-bold text-center">{{ $property->title }}</p>
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
    {!! $properties->appends(request()->except('page'))->links('vendor.pagination.bootstrap-5') !!}
</div>
@endsection