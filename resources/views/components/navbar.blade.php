<div class="bgColor-Navbar sticky-top pt-3">
    <nav class="navbar container-fluid navbar-expand-lg">
    <div class="container">
        <a class="col-lg-2 col-md-4 col-6 navbar-brand" href="{{route('welcome')}}"><img src="{{URL::asset('images/DreamFields Logo(full)-01.png')}}" class="col-12"  alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
                        <a class="nav-link textLight" aria-current="page" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown mx-lg-2">
                        <a class="nav-link dropdown-toggle textLight" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Condo Units
                        </a>
                        <ul class="dropdown-menu list-unstyled mb-0">
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                    href="{{ route('buypage') }}">
                                    <span class="d-inline-block bg-orange rounded-circle p-1"></span>
                                    For Sale
                                </a></li>
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                    href="{{ route('rentpage') }}">
                                    <span class="d-inline-block bg-orange rounded-circle p-1"></span>
                                    For Rent</a>
                            </li>
                            <li>
                                @guest
                                    @if (Route::has('login'))
                                        <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="{{ route('sellpage') }}">
                                            <span class="d-inline-block bg-orange rounded-circle p-1"></span>
                                            List Your Unit</a>
                                    @endif
                                @else
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{ route('listing') }}">
                                        <span class="d-inline-block bg-orange rounded-circle p-1"></span>
                                        List Your Unit</a>
                                @endguest
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('amenities') ? 'active' : ''}}">
                        <a class="nav-link textLight" href="{{ route('amenities') }}">Amenities</a>
                    </li>
                    <li class="nav-item {{ request()->is('inquire') ? 'active' : ''}}">
                        <a class="nav-link textLight" href="{{ route('inquire') }}">Inquire</a>
                    </li>
                    
                    <li class="nav-item ms-2 {{ request()->is('aboutus') ? 'active' : ''}}">
                        <a class="nav-link textLight" href="{{ route('aboutus') }}">About Us</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    @auth

                        <a href="{{ url('/home') }}" class="btn btn-success greenBtn border-0">Dashboard</a>
                    @else
                        <div class="btn-group">
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-success rounded-0 rounded-start-1 me-0"><i class="fa-solid fa-right-to-bracket"></i> Login </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-outline-success rounded-0 rounded-end-1">Sign Up</a>
                            @endif
                        </div>
                        @endif
                @endauth
               
            </div>
        </div>
    </nav>
</div>