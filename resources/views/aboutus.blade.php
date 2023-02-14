@extends('layouts.buysellrent')
@section('content')
    <div class="container-lg text-light mb-5 pt-5 text-center">
        <img class="img-fluid" src="..\images\DreamFields Logo(full)(green)-01.png" alt="" width="50%">
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col mb-5">
                <h1 class="fw-bold mb-5"><span class="border-bottom border-5"">About Us</span></h1>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Welcome to <span class="fw-bold"> Dream Fields </span>,
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
                    <span class="fw-bold">Dream Fields</span> . Contact us today to learn more about how we can help you
                    with all of
                    your real estate needs.
                </p>
            </div>

        </div>
        <div class="row g-1 mb-3">
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.istockphoto.com/id/1341791674/photo/businessman-working-on-laptop-computer-with-electronics-document-icons-e-document-management.jpg?b=1&s=170667a&w=0&k=20&c=YRnjpFakKMaeSnITCQcmKJ3oCYpjgo5bbJqz4BjkEjo="
                    alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center ps-3  pb-3" data-aos="fade-up-left">
                <div>
                    <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%"
                        alt="">
                    <h1 class="fw-bold mb-3"><span class="border-bottom border-5">Mission</span></h1>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        Our mission at <span class="fw-bold"> Dream Fields </span> is to provide our clients with the
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
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%" alt="">
                <h1 class="fw-bold mb-3"><span class="border-bottom border-5"">Vision</span></h1>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Our vision at <span class="fw-bold"> Dream Fields </span> is to be the leading real estate company in
                    <span class="fw-bold"> Philippines</span> and beyond, known for providing exceptional service and
                    delivering outstanding results for our clients. We strive to be a
                    trusted partner for all of our clients' real estate needs and to consistently exceed their expectations.
                </p>
            </div>
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-left">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.istockphoto.com/id/1360521208/photo/businessman-using-a-computer-for-analysis-seo-search-engine-optimization-marketing-ranking.jpg?b=1&s=170667a&w=0&k=20&c=xyIKuSwGq65eVI8YLRIku2F8w5JkUG11E1AoSAfulDU="
                    alt="">
            </div>
        </div>
        <div class="row g-1 mb-3">
            <div class="col-12 col-md-6 align-self-center  pb-3" data-aos="fade-up-right">
                <img class="img-fluid mx-auto d-block shadow" style="max-width: 100%;"
                    src="https://media.istockphoto.com/id/1360521209/photo/businessman-using-a-computer-to-concept-of-fund-financial-investment-management-portfolio.jpg?b=1&s=170667a&w=0&k=20&c=gedPHE3Vq_PbE1gufgy-8NhwP8gpj8YvYnSR7TZRFxo="
                    alt="">
            </div>
            <div class="col-12 col-md-6 align-self-center  ps-3  pb-3" data-aos="fade-up-left">
                <img class="mx-auto d-block" src="../images/DreamFields Logo Green-01.png" width="7%" alt="">
                <h1 class="fw-bold mb-3"><span class="border-bottom border-5"">Values</span></h1>
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
      
        <div class="row text-center">
            {{-- <div class="text-muted">For rent: 
                @php
                  $forrent = 0;
                @endphp
                @foreach($properties as $property)
                @if($property->isApproved == 'Approved')
                  @if($property->unitStatus == 'For Rent')
                    @php
                      $forrent += 1;
                    @endphp
                  @endif
                @endif  
                @endforeach
                {{ $forrent }} 
              </div> --}}
         
            <div class="col-6 col-md-3 mb-2">
                <h1 class="fw-bold"  id="numCount" data-val="22">0</h1>
                <h5> CONDO FOR SALE</h5>
            </div>
            <div class="col-6 col-md-3  mb-2">
                <h1 class="fw-bold"  id="numCount" data-val="300">0</h1>
                <h5> CONDO FOR RENT</h5>
            </div>
            <div class="col-6 col-md-3  mb-2">
                <h1 class="fw-bold" id="numCount" data-val="100">0</h1>
                <h5> RECENTLY SOLD</h5>
            </div>
            <div class="col-6 col-md-3  mb-2">
                <h1 class="fw-bold"  id="numCount" data-val="550">0</h1>
                <h5> TOTAL LISTED</h5>
            </div>
            <script> 
            let valueDisplays = document.querySelectorAll("#numCount");
            let interval = 5000;
            
            valueDisplays.forEach((valueDisplay)=>{
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute ("data-val"));
                let duration = Math.floor(interval/endValue);
                let counter= setInterval(function(){
                    startValue += 1;
                    valueDisplay.textContent =startValue;
                    if(startValue == endValue){
                        clearInterval(counter);
                    }
            
                },duration)
            })
            </script>      
        </div>
    </div>
@endsection
