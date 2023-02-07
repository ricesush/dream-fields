<div class="bgColor">
    <nav class="navbar container-fluid navbar-expand-lg">
    <div class="container">
        <a class="col-lg-2 navbar-brand" href="{{route('welcome')}}"><img src="{{URL::asset('images/DreamFields Logo(full)-01.png')}}" class="col-12"  alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link textLight active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle textLight" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Condo Units
                </a>
                    <ul class="dropdown-menu list-unstyled mb-0">
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('buypage')}}">
                        <span class="d-inline-block bg-success rounded-circle p-1"></span>
                        For Sale
                    </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('rentpage')}}">
                        <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                        For Rent</a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('sellpage')}}">
                        <span class="d-inline-block bg-danger rounded-circle p-1"></span>
                        List Your Unit</a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link textLight" href="#">Inquire</a>
                </li>
                <li class="nav-item">
                <a class="nav-link textLight" href="#">About Us</a>
                </li>
            </ul>
            @if (Route::has('login'))
            <div class="hidden btn-group">
                @auth

                    <a href="{{ url('/home') }}"><button type="button" class="btn btn-success greenBtn border-0" >Dashboard</button>
                @else
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-success rounded-0 rounded-start me-0" >login</button></a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button type="button" class="btn btn-success greenBtn rounded-0 rounded-end fw-bold" >Register</button></a>
                    @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
    </nav>
</div>