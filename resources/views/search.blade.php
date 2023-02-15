@extends('layouts.buysellrent')

@section('content')
<div class="Bsr-banner-buy container-fluid position-relative ">
    <div class="container d-grid align-items-end">
    <div class="col">
            <h1 class="text-center fw-bold display-4 mt-5"><span class="text-light rounded-end-2">Search</span></span>
            </h1>
        </div>
        
        <form class="bgColor2 py-3 rounded-1 shadow " method="GET" action="{{ route('search') }}">
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


<div class="container mainHeight-search">

    <div class="d-flex justify-content-end my-2">
        <div class="d-flex justify-content-start">
            <select class="form-select focus-control" aria-label="Default select example">
                <option selected>Default Order</option>
                <option value="1">Price(Low to High)</option>
                <option value="2">Price(High to Low)</option>
                <option value="3">Date New to Old</option>
                <option value="4">Date Old to Knew</option>
            </select>
        </div>
    </div>



    @if ($errorMessage[0] === '')
    <div class="d-flex justify-content-center text-center">
        <div class="alert alert-warning col-lg-6 " role="alert">
            Kindly enter a keyword or use the dropdown buttons to search for a unit!
        </div>
    </div>

    @elseif (isset($errorMessage[0]) && !isset($text_input[0]))
    <div class="d-flex justify-content-center text-center">
        <div class="alert alert-warning col-6 " role="alert">
            Sorry, we didn't find any match.
        </div>
    </div>
    @else

    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($text_input as $input)

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow border border-0 bg-card-body">
                <div class="img-wrapper">
                    <img href="#" class="bsr-pict card-img-top" src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png" alt="..."></img>
                    <a href="#" class='fade content stretched-link text-white'>
                        <img class='logo-overlay' src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                        <span class='mt-3'> View Details</span></a>

                </div>
                <div class="card-body">
                    <p class="card-title h4 fw-bold text-center">{{ $input->title }}</p>
                    <hr>
                    </hr>
                    <div class="row text-center g-1 mt-2">
                        <div class="col-md-3 col-2">
                            <i class="fa-solid fa-bed"></i>
                            <br />
                            <a class='btn btn-sm'>{{ $input->numBed }}</a>
                        </div>
                        <div class="col-md-3 col-3">
                            <i class="fa-solid fa-bath"></i>
                            <br />
                            <a class='btn btn-sm'>{{ $input->numBaths }}</a>
                        </div>
                        <div class="col-md-3 col-3">
                            <i class="fa-solid fa-car"></i>
                            <br />
                            <a class='btn btn-sm'>{{ $input->hasParking }}</a>
                            <i class="fa-duotone fa-bed-front"></i>
                        </div>
                        <div class="col-md-3 col-3">
                            <i class="fa-solid fa-ruler"></i>
                            <br />
                            <a class='btn btn-sm'>{{ $input->floorArea }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-0 text-center">
                    <div class="d-flex align-items-center ">
                        <div class="col-md-3 pt-3 pb-3 card-footer-bg textLight">
                            <strong>{{ $input->unitStatus }}</strong>
                        </div>
                        <div class="col-md-9 pt-3 pb-3">
                            <small>P {{ $input->unitPrice }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif


    </div>

</div>
</div>

<div class="container">

</div>

@endsection