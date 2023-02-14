@extends('layouts.buysellrent')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col mb-5 mt-5">
                <img class="mx-auto d-block mb-2" src="../images/DreamFields Logo Green-01.png" width="4%" alt="">
                <h1 class="fw-bold mb-5 text-center display-3"><span class="border-bottom border-5">Amenities</span></h1>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Taste life’s simple pleasures with quality living at Chateau Elysée. Your charmed lifestyle unfolds in a
                    secure community that allows you to play, bond, mingle, share and belong.
            </div>

        </div>
        <div class="row g-1 mb-3">
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://hizonscatering.com/wp-content/uploads/2019/10/Events-Space-2" alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center ps-3  pb-3" data-aos="fade-up-left">
                    <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%"
                        alt="">
                    <h1 class="fw-bold mb-3 text-center"><span class="border-bottom border-5">Event Area</span></h1>
                    <ul class="text-center">
                        <li>
                            Enclosed Clubhouse and Poolside Area for Events and Functions.
                        </li>
                        <li>
                            Entertainment / Conference Rooms.
                        </li>
                    </ul>
            </div>
        </div>
        <div class="row g-1 swap-column mb-3">
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-right">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%" alt="">
                <h1 class="fw-bold mb-3 text-center"><span class="border-bottom border-5"">Kids Area</span></h1>
                <ul class="text-center">
                    <li>Children's Area. </li>
                    <li>Three (3) Kiddie Pools.</li>
                    <li> Open Playfield.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-left">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://d3exkutavo4sli.cloudfront.net/wp-content/uploads/2020/03/canary_playroom.jpg"
                    alt="">
            </div>
        </div>
        <div class="row g-1 mb-3">
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.karousell.com/media/photos/products/2022/9/8/affordable_2_bedroom_condo_for_1662627548_666e22b7_progressive"
                    alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-left">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%" alt="">
                <h1 class="fw-bold mb-3 text-center"><span class="border-bottom border-5"">Family Area</span></h1>
                <ul class="text-center">
                    <li>Recreation Hall with Wi-Fi Access.</li>
                    <li>Themed Gardens.</li>
                    <li>Picnic Area. </li>
                </ul>
            </div>
        </div>
        <div class="row g-1 swap-column mb-3">
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-right">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%" alt="">
                <h1 class="fw-bold mb-3 text-center"><span class="border-bottom border-5"">Adults Area</span></h1>
                <ul class="text-center">
                    <li>Three (3) 25-meter Lap Swimming Pools</li>
                    <li>Meditation Area</li>
                    <li>Smoking Area</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-left">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://images-ext-2.discordapp.net/external/HQFfxnHVlAayos_ww1yiPpQCPiG3_8y1nk8Sqyrdi8U/https/pbs.twimg.com/media/Fo3Y_2yaMAAeNkl.jpg"
                    alt="">
            </div>
        </div>
        <div class="row g-1 mb-3">
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://d323e4u8yt6mi9.cloudfront.net/blog/wp-content/uploads/2015/01/article_1411973887_2548_6450.jpg"
                    alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-left">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%" alt="">
                <h1 class="fw-bold mb-3 text-center"><span class="border-bottom border-5"">Sports & Recreation Area</span></h1>
                <ul class="text-center">
                    <li>Basketball / Volleyball Court</li>
                    <li>Badminton Courts</li>
                    <li>Jogging Trail</li>
                    <li>Spa Area</li>
                </ul>
            </div>
        </div>
        <hr />

        <div class="row text-center">
            <div class="col-6 col-md-3 mb-2">
                <h1 class="fw-bold" id="numCount" data-val="250">0</h1>
                <h5> CONDO FOR SALE</h5>
            </div>
            <div class="col-6 col-md-3  mb-2">
                <h1 class="fw-bold" id="numCount" data-val="300">0</h1>
                <h5> CONDO FOR RENT</h5>
            </div>
            <div class="col-6 col-md-3  mb-2">
                <h1 class="fw-bold" id="numCount" data-val="100">0</h1>
                <h5> RECENTLY SOLD</h5>
            </div>
            <div class="col-6 col-md-3  mb-2">
                <h1 class="fw-bold" id="numCount" data-val="550">0</h1>
                <h5> TOTAL LISTED</h5>
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
    </div>
@endsection
