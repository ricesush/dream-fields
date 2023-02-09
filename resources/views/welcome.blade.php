@extends('layouts.guest')

@section('content')

<div class="container-fluid">
<div class="container welcomePag">
    <div class="row text-center d-flex align-items-end justify-content-center contH ">

        <section class='col-lg-12 row d-flex align-items-center justify-content-center'>
            <div class="col-lg-12 textLight fs fw-bolder ">
                Find Your <span class="greenText">Dream Unit</span>
            </div>
            <div class='col-lg-12 textLight fs-5 '>
                Turning Your Dream Realty To Reality
            </div>
            <div class='row col-lg-6 d-flex mt-3 homeBtn'>
                <a href="{{route('buypage')}}" class='col-lg-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                    <span></span>
                    <p data-start="good luck!" data-text="View Units" data-title="For Sale"></p>
                </a>
                <a href="{{route('rentpage')}}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                    <span></span>
                    <p data-start="good luck!" data-text="View Units" data-title="For Rent"></p>
                </a>
                <a href="{{route('sellpage')}}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                    <span></span>
                    <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                </a>
            </div>
        </section>
        <form class="bgColor2 py-3 rounded-1">
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

<div class="container-fluid bg-light mt-5">
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide secHeight">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.slidesharecdn.com/ss_thumbnails/fieldsaleskit-140621040636-phpapp02-thumbnail-4.jpg?cb=1403481306" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://pinoydeal.ph/oc-content/uploads/937/176007_original.jpg" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://www.filbuild.com/philippines/real_estate/condominium/paranaque_city/smdc/field_residences/assets/Field_Residences_1BR_Living_Dining_Kitchen.jpg" class="d-block w-100 h-50" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="p-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.7699582794213!2d120.99299741264272!3d14.480105128830566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ce8755efe74b%3A0x716eb952ca28c1ae!2sField%20Residences%20-%20Building%201!5e0!3m2!1sen!2sph!4v1675903810012!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
    </div>
    
</div>
@endsection