<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href='css/app.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- this is navbar form components folder--}}
    @include('components.navbar')

    {{-- welcome page --}}
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
                    <a href="#"
                        class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                        <span></span>
                        <p data-start="good luck!" data-text="View Units" data-title="For Sale"></p>
                    </a>
                    <a href="#"
                        class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                        <span></span>
                        <p data-start="good luck!" data-text="View Units" data-title="For Rent"></p>
                    </a>
                    <a href="#"
                        class='col-3 border border-1 rounded-1 fw-bold welcomeBtn d-flex align-items-center justify-content-center'>
                        <span></span>
                        <p data-start="good luck!" data-text="Go >>" data-title="List Your Unit"></p>
                    </a>
                </div>
            </section>
        </div>
    </div>
    
   {{-- this is footer form components folder--}}  
   
    @include('components.footer')    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
