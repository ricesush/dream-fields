@extends('layouts.guest')

@section('content')
@extends('layouts.buysellrent')

@section('content')
<div class="Bsr-banner-buy container-fluid position-relative">
    <div class="container d-grid align-items-end bg-height ">
        <form class="bgColor2 py-2 rounded-1 mb-3" method="GET" action="{{ route('search') }}">
            @csrf
            <div class="row col-md-12 col-lg-12 d-flex justify-content-center m-0">
                <div class=" col-lg-4 col-md-12 d-flex me-0">
                    <select class="form-select bg-transparent border-0 border-bottom rounded-0" name="links" id="unitProperties" onchange="window.location.href=this.value;">
                        <option selected hidden value="Listing" class="text-dark">Listing</option>
                        <option value="{{ route('buypage') }}">For Sale</option>
                        <option value="{{ route('rentpage') }}">For Rent</option>
                    </select>
                    <select class="form-select bg-transparent border-0 border-bottom rounded-0 mx-3" name="baths" id="baths">
                    
                        <option selected hidden value="0">Baths</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <select class="form-select bg-transparent border-0 border-bottom rounded-0 pt-2" name="baths" id="beds">
                        <option Selected hidden value="0">Beds</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-lg-8 d-flex mt-3 text-light">
                    <input type="text" class="input text-light form-control bg-transparent border-0 border-bottom rounded-0" placeholder="Search..." id="input-search" name="search_input"/>
                    <button class="btn bg-transparent border-0 border-bottom rounded-0" type="button" id="search"><i class="fa fa-solid fa-magnifying-glass"></i></button>
                </div>
              </div>
         </form>
    </div>
</div>


    <div class="container">

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

        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($text_input as $input)
                <span class="text-light ">
                    {{$input}}
                </span>
            @endforeach
        </div>
    </div>

<div class="container">

</div>

@endsection