@extends('layouts.buysellrent')

@section('content')
    <div class="Bsr-banner-buy container-fluid position-relative">
        <div class="container d-grid align-items-end bg-height ">
            <form class="bgColor2 py-3 rounded-1">
                @csrf
                <div class="row col-md-12 col-lg-12 d-flex justify-content-center m-0">
                    <div class=" col-lg-4 col-md-12 d-flex me-0">
                        <select class="form-select bg-transparent border-0 border-bottom rounded-0" name="links" id="unitProperties">
                            <option selected hidden value="Listing" class="text-dark">Listing</option>
                            <option value="for_sale">For Sale</option>
                            <option value="for_rent">For Rent</option>
                        </select>
                        <select class="form-select bg-transparent border-0 border-bottom rounded-0 mx-3" name="baths" id="baths">
                            <option selected hidden value="0">Baths</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                        <select class="form-select bg-transparent border-0 border-bottom rounded-0 pt-2" name="baths" id="beds">
                            <option Selected hidden value="0">Beds</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-8 d-flex mt-3 text-light">
                        <input type="text" class="input text-light form-control bg-transparent border-0 border-bottom rounded-0" placeholder="Search..." id="input-search" />
                        <button class="btn bg-transparent border-0 border-bottom rounded-0" type="button" id="search"><i class="fa fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
            </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="d-flex justify-content-end">
                <div class="d-flex justify-content-start">
                    <select class="form-select focus-control" aria-label="Default select example">
                        <option selected>Default Order</option>
                        <option value="1">Price(Low to High)</option>
                        <option value="2">Price(High to Low)</option>
                        <option value="3">Date New to Old</option>
                        <option value="4">Date Old to Knew</option>
                    </select>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-md-3 g-3 mt-1">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
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
                                    <strong>For Sale</strong>
                                </div>
                                <div class="col-md-9 pt-3 pb-3">
                                    <small>P 1,000,000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border border-0 bg-card-body">
                        <div class="img-wrapper">
                            <img href="#" class="bsr-pict card-img-top"
                                src="https://www.vistaresidences.com.ph/img/containers/main/img/minimalist-condo-in-manila.png/15ed8280fc19482cae110268a2faebf0.png"
                                alt="..."></img>
                            <a href="#" class='fade content stretched-link text-white'>
                                <img class='logo-overlay'
                                    src='https://i.ibb.co/H75pK9V/Dream-Fields-Logo-White-01.png'></img>
                                <span class='mt-3'> View Details</span></a>
                        </div>
                        <div class="card-body">
                            <p class="card-title h4 fw-bold text-center">Condo Condo</p>
                            
                            <hr/>
                         
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
                                    <strong>For Sale</strong>
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
    @endsection
