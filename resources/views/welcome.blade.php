@extends('layouts.guest')

@section('content')
<div class="container-fluid ">
    <div class="container welcomePag">
        <div class="row text-center d-flex align-items-end justify-content-center contH ">

            <div class="container-fluid">
                <div class="container welcomePag">
                    <div class="row text-center d-flex align-items-end justify-content-center contH ">
                        <section class='col-lg-12 row d-flex align-items-center justify-content-center'>
                            <p class="col-lg-12 textLight fs fw-bolder ">
                                Find Your <span class="greenText">Dream Unit</span>
                            </p>
                            <p class='col-lg-12 textLight fs-5 '>
                                Turning Your Dream Realty To Reality
                            </p>
                            <div class='row col-lg-6 d-flex mt-3 homeBtn'>
                                <a href="{{route('buypage')}}" class='col-lg-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="View Units" data-title="For Sale"></p>
                                </a>
                                <a href="{{route('rentpage')}}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="View Units" data-title="For Rent"></p>
                                </a>
                                @guest
                                @if (Route::has('login'))
                                <a href="{{route('sellpage')}}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                                </a>
                                @endif
                            @else
                            <a href="{{route('listing')}}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                <span></span>
                                <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                            </a>
                            @endguest
                            </div>
                        </section>
                        <form class="bgColor2 py-3 rounded-1 shadow">
                            @csrf
                            <div class="row col-md-12 col-lg-12 d-flex justify-content-center m-0">
                                <div class=" col-lg-4 col-md-12 d-flex me-0">
                                    <select class="form-select bg-transparent border-0 border-bottom rounded-0" name="links" id="unitProperties">
                                        <option selected hidden value="Listing" class="text-dark">Listing</option>
                                        <option value="for_sale">For Sale</option>
                                        <option value="for_rent">For Rent</option>
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
                                    <input type="text" class="input text-light form-control bg-transparent border-0 border-bottom rounded-0" placeholder="Search..." id="input-search" />
                                    <button class="btn bg-transparent border-0 border-bottom rounded-0" type="button" id="search"><i class="fa fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            </div>
            @endsection