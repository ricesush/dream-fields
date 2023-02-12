@extends('layouts.buysellrent')
@section('content')
<div class="Bsr-banner-sell">

</div>
    <div class="container-fluid bg-warning">
        <div class="container-lg">
            <div class="row">
                <div class="col bg-info">
                    <h3 class=" ">Let us help you list your property:</h3>
                    <p>Due to security reasons, you may list the unit that you bought only from Dream Fields. Additionally,
                        you will be required to create an account to better manage your listing and to verify your idenity.
                    </p>
                    <div class="">

                        <div class="pt-2 ps-2 ">Don't have an account?
                            <a href="{{ route('register') }}" class="a2 fw-bold text-decoration-underline">Sign up!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
