@extends('layouts.guest')

@section('content')
<div class="container-fluid wHeight">
    <div class="container">
        <div class="row text-center d-flex align-items-end justify-content-center contH">
            <div class="container-fluid">
                <div class="container welcomePag">
                    <div class="row text-center d-flex align-items-end justify-content-center contH ">
                        <section class='col-lg-12 row d-flex align-items-center justify-content-center'>
                            <p class="col-lg-12 textLight fs fw-bolder" data-aos="fade-down" data-aos-duration="3000">
                                Find Your <span class="greenText">Dream Unit</span>
                            </p>
                            <p class='col-lg-12 textLight fs-5 '>
                                Turning Your Dream Realty To Reality
                            </p>
                            <div class='row col-lg-6 d-flex mt-3 homeBtn'>
                                <a href="{{ route('buypage') }}" class='col-lg-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="View Units" data-title="For Sale"></p>
                                </a>
                                <a href="{{ route('rentpage') }}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="View Units" data-title="For Rent"></p>
                                </a>
                                @guest
                                @if (Route::has('login'))
                                <a href="{{ route('sellpage') }}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                                </a>
                                @endif
                                @else
                                @if (Auth::check() && Auth::user()->role == 'admin'){

                                <a href="{{ route('condounits') }}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                                </a>
                                }

                                @else
                                <a href="{{ route('listing') }}" class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                    <span></span>
                                    <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                                </a>
                                @endif
                                @endguest
                            </div>
                        </section>

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
                                <div class="col-lg-8 d-flex  align-items-end">
                                    <input type="text" class="bg-primary input text-dark form-control bg-transparent border-0 border-bottom rounded-0 border-b" placeholder="Search..." id="input-search" name="search_input" />
                                    <button class="btn bg-transparent border-0 border-bottom rounded-0 border-b" type="submit" id="search"><i class="fa fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white bg-opacity-75 my-5">
    <div class="container">
        <section class="pt-5 text-center col-lg-1 col-md-3 mx-auto">
            <img src="{{URL::asset('images/DreamFields Logo Green-01.png')}}" class="col-4" alt="..." />
        </section>
        <section class="text-center fs-2 fw-bold">
            DREAM <span class="orangeText">FIELDS</span>
        </section>
        <p class="text-center fst-italic pb-4 fw-bold">
            "Turning your dream realty into reality"
        </p>
        <section data-aos="flip-up">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner c-item">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="{{URL::asset('images/carousel/carousel1.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://pinoydeal.ph/oc-content/uploads/937/176006_original.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://1.bp.blogspot.com/-03PwXiDUiA8/U7eWdwjg5KI/AAAAAAAADUQ/O1GhCbSMxoo/s1600/Field+Residences+Sucat+Paranaque+(38).jpg" class="d-block w-100" alt="...">
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
        </section>
        <section class="shadow">
            <div class="card mb-3 border-0 border-bottom">
                <div class="row g-0">
                    <div class="col-lg-6 col-md-12 py-4">
                        <img src="https://www.filbuild.com/philippines/real_estate/condominium/paranaque_city/smdc/field_residences/assets/Field_Residences_Site_Development_Plan.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card-body">
                            <h5 class="card-title text-green d-flex align-items-end py-3"><span class="col-1"><img src="{{URL::asset('images/DreamFields Logo Green-01.png')}}" alt="..." style="max-width: 35px;" /></span> How we see it.</h5>
                            <p>Life flourishes when space is abundance. Space. A vast haven. An expanse that lets people find themselves, unleash creativity, rear a family, play and live.
                                Now you can find this kind of space directly behind SM City Sucat in the progressive city of Parañaque, amidst the plains of Field Residences.
                                Every second becomes more vivid with the sorroundings. Imagine near 8 hectares of fields embracing 10 mid-rise buildings, each showcasing a modern tropical design. All this in a meticulously designed environment that encompasses an entire residential condominium village. Plus, lavish conviniences and amenities for a complete and well-balanced lifestyle.</p>
                            <h5 class="card-title text-green d-flex align-items-end py-3"><span class="col-1"><img src="{{URL::asset('images/DreamFields Logo Green-01.png')}}" alt="..." style="max-width: 35px;" /></span> At A Glance.</h5>
                            <ul>
                                <li>
                                    Land Area: 78,000 sqm</li>
                                <li>
                                    Location: Sucat, Parañaque</li>
                                <li>
                                    Number of Buildings: 10</li>
                                <li>
                                    Floors Per Building: 8 to 12</li>
                                <li>
                                    HLURB TLS No. ENCRFO-09-02-003</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5">
            <div class="card-group shadow ">
                <div class="card position-relative rounded-0 ">
                    <div class="card-body">
                        <h5 class="card-title text-green d-lg-flex align-items-end col-lg-8 text-center py-3"><span class="col-2"><img src="{{URL::asset('images/DreamFields Logo Green-01.png')}}" alt="..." style="max-width: 35px;" /></span> Features and Amenities</h5>
                        <p>Taste life’s simple pleasures with quality living at Chateau Elysée. Your charmed lifestyle unfolds in a secure community that allows you to play, bond, mingle, share and belong.</p>
                        <div class='row col-lg-6 d-flex homeBtn2 position-absolute top-100 start-50 translate-middle text-center'>
                            <a href="{{ route('amenities') }}" class='col-lg-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                <span></span>
                                <p data-start="good luck!" data-text="Go >>" data-title="Learn More"></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card position-relative rounded-0 mt-sm-5 mt-md-0 mt-lg-0">
                    <div class="card-body ">
                        <h5 class="card-title text-green d-lg-flex align-items-end col-lg-9 text-center py-3"><span class="col-2"><img src="{{URL::asset('images/DreamFields Logo Green-01.png')}}" alt="..." style="max-width: 35px;" /></span> Ground Floor</h5>
                        <ul>
                            <li>
                                Grand Entrance Lobby with Lounge Area</li>
                            <li>
                                Covered Drop-Off Area</li>
                            <li>
                                Two (2) Passenger Elevators</li>
                        </ul>
                        <div class='row col-lg-6 d-flex homeBtn2 position-absolute top-100 start-50 translate-middle text-center'>
                            <a href="{{ route('amenities') }}" class='col-lg-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                                <span></span>
                                <p data-start="good luck!" data-text="Go >>" data-title="Learn More"></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card position-relative rounded-0">
                    <div class="card-body">
                        <h5 class="card-title text-green d-lg-flex align-items-end col-lg-10 text-center py-3"><span class="col-2"><img src="{{URL::asset('images/DreamFields Logo Green-01.png')}}" alt="..." style="max-width: 35px;" /></span> Building Facilities & Services</h5>
                        <ul>
                            <li>
                                Chambermaid Services (Maintenance and Housekeeping)</li>
                            <li>
                                Individual Mail Boxes</li>
                            <li>
                                Balcony in All 2-Bedroom Units</li>
                            <li>
                                and more...</li>
                        </ul>
                    </div>
                    <div class='row col-lg-6 d-flex homeBtn2 position-absolute top-100 start-50 translate-middle text-center '>
                        <a href="{{ route('buypage') }}" class='col-lg-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center shadow'>
                            <span></span>
                            <p data-start="good luck!" data-text="Go >>" data-title="Learn More"></p>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>

<div class="container my-5">
    <section class=" text-center col-lg-1 col-md-3 mx-auto ">
        <img src="{{URL::asset('images/DreamFields Logo White-01.png')}}" class="col-4" alt="..." />
    </section>
    <section class="text-center text-light fs-2 fw-bold">
        Social Media <span class="orangeText">Feedback</span>
    </section>
    <p class="text-center  text-light fst-italic fw-bold">
        "Turning your dream realty into reality"
    </p>
</div>
<div>
    <div class="container">
        <section class='row d-flex justify-content-between mb-5'>
            <div class="col-lg-3 col-md-6 d-flex justify-content-center" data-aos="fade-right">
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">✅ Balcony<br>✅ Good price for Studio <a href="https://t.co/6CP76XeOIT">pic.twitter.com/6CP76XeOIT</a></p>&mdash; Dream Fields (@Dre4mFields) <a href="https://twitter.com/Dre4mFields/status/1624767882046611457?ref_src=twsrc%5Etfw">February 12, 2023</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-lg-3 col-md-6 d-flex justify-content-center" data-aos="fade-left">
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">Nice place to stay. Clean and complete with what you need. 🥰🥰🥰 <a href="https://t.co/Kqg7y61nFL">pic.twitter.com/Kqg7y61nFL</a></p>&mdash; Dream Fields (@Dre4mFields) <a href="https://twitter.com/Dre4mFields/status/1623707994092605446?ref_src=twsrc%5Etfw">February 9, 2023</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-lg-3 col-md-6 d-flex justify-content-center" data-aos="fade-right">
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">Great security and modern spacious rooms. Loved washing machine and tumble dryer. <a href="https://t.co/cmownGdpig%22%3E">pic.twitter.com/cmownGdpig </a></p>&mdash; Dream Fields (@Dre4mFields) <a href="https://twitter.com/Dre4mFields/status/1625194930451939328?ref_src=twsrc%5Etfw%22%3E">February 13, 2023</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-lg-3 col-md-6 d-flex justify-content-center" data-aos="fade-left">
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">The pool was great easy walk to everywhere staff are super friendly and helpful. 🥰 I can relax all day with my Family and they have life guard for monitoring 👨‍👩‍👧 <a href="https://t.co/m0bbMQsqeg%22%3E">pic.twitter.com/m0bbMQsqeg</a></p>&mdash; Dream Fields (@Dre4mFields) <a href="https://twitter.com/Dre4mFields/status/1625197801398501377?ref_src=twsrc%5Etfw%22%3E">February 13, 2023</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </section>

        <section class='d-flex justify-content-center'>

        </section>
    </div>
</div>

@endsection