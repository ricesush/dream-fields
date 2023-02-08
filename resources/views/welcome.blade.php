@extends('layouts.guest')

@section('content')
    <div class="container welcomePage">
        <div class="row text-center d-grid align-items-center contH">
            <section class='row d-flex align-items-center justify-content-center'>
                <div class="col-12 textLight fs-1 fw-bolder">
                    Find Your Dream Unit
                </div>
                <div class='col-12 textLight fs-5'>
                    Turning Your Dream Realty To Reality
                </div>
                <div class='col-lg-6 col-md-12 row d-grid d-md-flex mt-3 homeBtn'>
                    <a href="{{route('buypage')}}"
                        class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                        <span></span>
                        <p data-start="good luck!" data-text="View Units" data-title="For Sale"></p>
                    </a>
                    <a href="{{route('rentpage')}}"
                        class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                        <span></span>
                        <p data-start="good luck!" data-text="View Units" data-title="For Rent"></p>
                    </a>
                    <a href="{{route('sellpage')}}"
                        class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                        <span></span>
                        <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection
