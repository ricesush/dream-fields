@extends('layouts.buysellrent')
@section('content')
   
    <div class="container-lg pt-5">
            <div class="card mb-3 mt-5 shadow border border-0" >
                <div class="row g-0">
                    <div class="col-md-5  ">
                        <img src="https://www.lifeyet.com/wp-content/uploads/2020/09/wohnungseigentumsverwaltung.jpg"
                            class="sellpage-img img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="card-body  mx-3">
                            <h1 class="card-title fw-bold">Let us help  you, <br/>  List your property!</h1>
                            <hr/>
                            <p class="card-text">Due to security reasons, you may list the unit that you bought only from
                                Dream Fields. Additionally,
                                you will be required to create an account to better manage your listing and to verify your
                                idenity.</p>
                            <div class="pt-2 ps-2 ">
                                <p>Don't have an account?
                                    <a href="{{ route('register') }}" class="a2 fw-bold text-decoration-underline text-dark"> Sign
                                        up!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
