<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href='css/buysellrent.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- this is navbar form components folder --}}
    @include('components.navbar')
    <div class="Bsr-banner-rent">
        <div class='banner-title position-absolute top-50 start-50 translate-middle fw-bolder'> Rent</div>
    </div>
    <div class="container-lg">
        @include('components.bsrSearch')
        @include('components.bsrFilter')
      
        {{-- Card section --}}
        <div class="row row-cols-1 row-cols-md-3 g-3 mt-1">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border border-0">
                    <div class="img-wrapper">
                        <img href="#" class="bsr-pict card-img-top"
                            src='https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png'
                            alt="..."></img>
                        <a href="#" class="fade content stretched-link text-white">
                            <img class='logo-overlay'
                                src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                            <span class='mt-3'> View Details</span></a>
                    </div>
                    <div class="card-body bg-card-body">
                        <p class="card-title h4 fw-bold text-center">Condo Condo</p>
                        <hr>
                        </hr>
                        <div class="row text-center g-1 mt-2">
                            <div class="col-md-3 col-2">
                                <i class="fa-solid fa-bed"></i>
                                <br />
                                <a class='btn btn-sm'>2 Beds</a>
                            </div>
                            <div class="col-md-3 col-3">
                                <i class="fa-solid fa-bath"></i>
                                <br />
                                <a class='btn btn-sm'>1 Baths</a>
                            </div>
                            <div class="col-md-3 col-3">
                                <i class="fa-solid fa-car"></i>
                                <br />
                                <a class='btn btn-sm'>1 Garage</a>
                                <i class="fa-duotone fa-bed-front"></i>
                            </div>
                            <div class="col-md-3 col-3">
                                <i class="fa-solid fa-ruler"></i>
                                <br />
                                <a class='btn btn-sm'>150 Sq m</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 text-center">
                        <div class="d-flex align-items-center ">
                            <div class="col-md-3 pt-3 pb-3 card-footer-bg textLight">
                                <strong>For Rent</strong>
                            </div>
                            <div class="col-md-9 pt-3 pb-3">
                                <small>P 1,000,000</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 {{-- this is footer form components folder --}}
 @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>