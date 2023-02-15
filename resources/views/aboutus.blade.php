@extends('layouts.buysellrent')
@section('content')
    <div class="container-lg text-light mb-5 pt-5 text-center">
        <img class="img-fluid" src="..\images\DreamFields Logo(full)(green)-01.png" alt="" width="50%">
    </div>
    <div class="container-lg mb-3">
        <div class="row">
            <div class="col mb-5">
                <h1 class="fw-bold mb-5 text-center"><span class="border-bottom border-b ">About Us</span></h1>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Welcome to <span class="fw-bold"> Dream <span class="orangeText">Fields</span> </span>,
                    your premier source for all things real estate. Our teamc of experienced and
                    knowledgeable real estate professionals is dedicated to providing our clients with the highest level of
                    service and expertise in the industry.
                </p>
                <p>
                    We understand that buying, renting or selling a Condo Unit is a big decision, and we strive to make the
                    process as seamless and stress-free as possible. Our team is equipped with the latest technology and
                    market knowledge to ensure that our clients receive the best possible outcome.
                </p>
                <p>
                    If you're looking for a team of dedicated and knowledgeable real estate professionals, look no further
                    than
                    <span class="fw-bold">Dream <span class="orangeText">Fields</span></span> . Contact us today to learn
                    more about how we can help you
                    with all of
                    your real estate needs.
                </p>
            </div>

        </div>
        <div class="row g-1 mb-3">
            <div class="col-12 col-md-6 align-self-center pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.istockphoto.com/id/1341791674/photo/businessman-working-on-laptop-computer-with-electronics-document-icons-e-document-management.jpg?b=1&s=170667a&w=0&k=20&c=YRnjpFakKMaeSnITCQcmKJ3oCYpjgo5bbJqz4BjkEjo="
                    alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center ps-3  pb-3" data-aos="fade-up-left">
                <div>
                    <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="5%"
                        alt="">
                    <h1 class="fw-bold mb-3 text-center py-2"><span class="border-bottom border-b">Mission</span></h1>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        Our mission at <span class="fw-bold"> Dream <span class="orangeText">Fields</span> </span> is to
                        provide our clients with the
                        highest
                        level of service and expertise in the
                        real estate industry. We are committed to helping our clients achieve their real estate goals by
                        leveraging our knowledge, technology, and market insights. We believe that communication,
                        transparency, and a
                        client-first approach are key to our success and to building long-lasting relationships with our
                        clients.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-1 swap-column mb-3">
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-right">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="5%" alt="">
                <h1 class="fw-bold mb-3 text-center py-2"><span class="border-bottom border-b">Vision</span></h1>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Our vision at <span class="fw-bold"> Dream <span class="orangeText">Fields</span> </span> is to be the
                    leading real estate company in
                    <span class="fw-bold"> Philippines</span> and beyond, known for providing exceptional service and
                    delivering outstanding results for our clients. We strive to be a
                    trusted partner for all of our clients' real estate needs and to consistently exceed their expectations.
                </p>
            </div>
            <div class="col-12 col-md-6 align-self-center pb-3" data-aos="fade-up-left">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.istockphoto.com/id/1360521208/photo/businessman-using-a-computer-for-analysis-seo-search-engine-optimization-marketing-ranking.jpg?b=1&s=170667a&w=0&k=20&c=xyIKuSwGq65eVI8YLRIku2F8w5JkUG11E1AoSAfulDU="
                    alt="">
            </div>
        </div>
        <div class="row g-1 mb-5">
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.istockphoto.com/id/1360521209/photo/businessman-using-a-computer-to-concept-of-fund-financial-investment-management-portfolio.jpg?b=1&s=170667a&w=0&k=20&c=gedPHE3Vq_PbE1gufgy-8NhwP8gpj8YvYnSR7TZRFxo="
                    alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-left">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="5%" alt="">
                <h1 class="fw-bold mb-3 text-center py-2"><span class="border-bottom border-b">Values</span></h1>
                <ul>
                    <li>
                        <span class="fw-bold"> Customer Focus: </span> Putting the needs and interests of our clients first
                        and delivering exceptional
                        service at all times.
                    </li>
                    <li>
                        <span class="fw-bold">Integrity: </span> Conducting ourselves with honesty and transparency in all
                        of our dealings.
                    </li>
                    <li>
                        <span class="fw-bold"> Innovation: </span> technology and new ideas to improve our services and stay
                        ahead of the
                        competition.
                    </li>
                    <li>
                        <span class="fw-bold"> Professionalism: </span> Maintaining the highest standards of conduct and
                        expertise in the real estate
                        industry.
                    </li>
                </ul>
            </div>
        </div>
        <hr />
        <div class="row text-center my-3">
            <div class="col-6 col-md-3">
                @php
                    $forsale = 0;
                @endphp
                @foreach ($properties as $property)
                    @if ($property->isApproved == 'Approved')
                        @if ($property->unitStatus == 'For Sale')
                            @php
                                $forsale += 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                <h1 class="fw-bold" id="numCount" data-val="{{ $forsale }}"> {{ $forsale }}</h1>
                <h5> CONDO FOR SALE</h5>
                <i class="fa-solid fa-building-shield fa-2x text-center"></i>
            </div>
            <div class="col-6 col-md-3  mb-2">
                @php
                    $forrent = 0;
                @endphp
                @foreach ($properties as $property)
                    @if ($property->isApproved == 'Approved')
                        @if ($property->unitStatus == 'For Rent')
                            @php
                                $forrent += 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                <h1 class="fw-bold" id="numCount" data-val="{{ $forrent }}">{{ $forrent }}</h1>
                <h5> CONDO FOR RENT</h5>
                <i class="fa-solid fa-building-circle-check fa-2x text-center"></i>
            </div>
            <div class="col-6 col-md-3  mb-2">
                @php
                    $total = 0;
                @endphp
                @foreach ($properties as $property)
                    @if ($property->unitStatus == 'Sold')
                        @php
                            $total += 1;
                        @endphp
                    @endif
                @endforeach
                <h1 class="fw-bold" id="numCount" data-val="{{ $total }}">{{ $total }}</h1>
                <h5> RECENTLY SOLD</h5>
                <i class="fa-solid fa-hand-holding-dollar fa-2x text-center"></i>
            </div>
            <div class="col-6 col-md-3  mb-2">
                @php
                    $total = 0;
                @endphp
                @foreach ($properties as $property)
                    @if ($property->isApproved == 'Approved')
                        @php
                            $total += 1;
                        @endphp
                    @endif
                @endforeach
                <h1 class="fw-bold" id="numCount" data-val="{{ $total }}}">{{ $total }}</h1>
                <h5> TOTAL LISTED</h5>
                <i class="fa-sharp fa-solid fa-city fa-2x text-center"></i>

            </div>
            <script>
                let valueDisplays = document.querySelectorAll("#numCount");
                let interval = 1000;

                valueDisplays.forEach((valueDisplay) => {
                    let startValue = 0;
                    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                    let duration = Math.floor(interval / endValue);
                    let counter = setInterval(function() {
                        startValue += 1;
                        valueDisplay.textContent = startValue;
                        if (startValue == endValue) {
                            clearInterval(counter);
                        }
                    }, duration)
                })
            </script>
        </div>
        <hr />
        <div class="row g-2 mt-3">
            <h1 class="text-center mb-4 fw-bold display-4"> <span class="border-bottom border-b">OUR TEAM</span></h1>
            <div class="col-12 col-sm-6 col-md-3" data-aos="zoom-out-left">
                <div class="card-client shadow">
                    <div class="user-picture">
                        <img class="img-fluid" src="../images/webdev/imat.png" alt="">
                    </div>
                    <p class="name-client">Raymart Vergara
                        <span>Frontend Developer
                        </span>
                    </p>
                    <div class="social-media">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Twitter</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Instagram</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Facebook</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                </path>
                            </svg>
                            <span class="tooltip-social">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3" data-aos="zoom-out-left">
                <div class="card-client shadow">
                    <div class="user-picture">
                        <img class="img-fluid" src="../images/webdev/cj.png" alt="">
                    </div>
                    <p class="name-client">Chris Jhovin Cabral
                        <span>Frontend Developer
                        </span>
                    </p>
                    <div class="social-media">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Twitter</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Instagram</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Facebook</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                </path>
                            </svg>
                            <span class="tooltip-social">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3" data-aos="zoom-out-left">

                <div class="card-client shadow">
                    <div class="user-picture">
                        <img class="img-fluid" src="../images/webdev/gab.png" alt="">
                    </div>
                    <p class="name-client">Gabriel Dayot
                        <span>Backend Developer
                        </span>
                    </p>
                    <div class="social-media">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Twitter</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Instagram</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Facebook</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                </path>
                            </svg>
                            <span class="tooltip-social">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3" data-aos="zoom-out-left">
                <div class="card-client shadow">
                    <div class="user-picture">
                        <img class="img-fluid" src="../images/webdev/ej.png" alt="">
                    </div>
                    <p class="name-client">E-j Santosidad
                        <span>Fullstack Developer
                        </span>
                    </p>
                    <div class="social-media">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Twitter</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Instagram</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                </path>
                            </svg>
                            <span class="tooltip-social">Facebook</span>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                </path>
                            </svg>
                            <span class="tooltip-social">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
