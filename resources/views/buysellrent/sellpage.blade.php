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
    <div class="Bsr-banner-sell">
        <div class='banner-title position-absolute top-50 start-50 translate-middle fw-bolder'> </div>
    </div>
    <div class="container-lg  mb-5 pb-5 px-3 col-lg-6 bg-white rounded-4">
        <div class="text-center py-3 rounded-4">
            <div class="bg-card-body  text-center py-5 rounded-4">
                <h1 class='fw-bolder'>Would you like to list a property <br />in our website?</h1>
                <h5 class='mt-2'>Help us, help you! Kindly fill the form and get started.</h5>
            </div>
        </div> <div class="row">
            <div class="col mt-4">
                <form class="row g-2 fw-bold mt-2" method="POST" action="#">
                    <h2 class='fw-bold'>Personal Details :<button class="btn btn-dark float-end me-1"> Edit <i
                                class="fa-solid fa-pen-to-square"></i></button></h2>
                    <div class="col-md-4">
                        <label for="firstName" class="form-label"><span class='fs-5'>Fist Name</span></label>
                        <input type="text" class="form-control" id="fistName" placeholder='Ex. Juan' disabled />
                    </div>
                    <div class="col-md-4">
                        <label for="middleName" class="form-label"><span class='fs-5'>Middle Name</span></label>
                        <input type="text" class="form-control" id="middleName" placeholder="Optional" disabled />
                    </div>
                    <div class="col-md-4">
                        <label for="lastName" class="form-label"><span class='fs-5'>Last Name</span></label>
                        <input type="text" class="form-control" id="lastName" placeholder='Ex. Dela Cruz'
                            disabled />
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label"><span class='fs-5'>Complete Address</span></label>
                        <input type="address" class="form-control" id="address"
                            placeholder="House No./Street/Barangay/Municipality/Province" disabled />
                    </div>
                    <div class="col-md-8">
                        <label for="email" class="form-label"><span class='fs-5'>Email</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Insert your Email here."
                            disabled />
                    </div>
                    <div class="col-md-4">
                        <label for="phone" class="form-label"><span class='fs-5'>Phone Number</span></label>
                        <input type="text" class="form-control" id="phone" placeholder="Ex. 0919*******"
                            disabled />
                    </div>
                    <hr />
                    <h2 class='fw-bold'>Property Details :</h2>
                    <div class="col-md-6">
                        <label for="unitType" class="form-label">Unit Type</label>
                        <input type="text" class="form-control" id="unitType" placeholder='Condo' disabled />
                    </div>

                    <div class="col-md-6 col-6">
                        <label for="inputState" class="form-label">List Unit as</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>For Sale</option>
                            <option>For Rent</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <label for="beds" class="form-label">Beds </label>
                        <input type="number" class="form-control" id="beds" placeholder="Ex. 1" />
                    </div>
                    <div class="col-md-2 col-6">
                        <label for="baths" class="form-label">Baths </label>
                        <input type="number" class="form-control" id="baths" placeholder="Ex. 1" />
                    </div>
                    <div class="col-md-2 col-6">
                        <label for="garage" class="form-label">Parking </label>
                        <input type="number" class="form-control" id="garage" placeholder="Ex. 1" />
                    </div>
                    <div class="col-md-3 col-6">
                        <label for="propertySize" class="form-label">Unit Size</label>
                        <input type="text" class="form-control" id="unittySize"
                            placeholder="Ex. 120 sqt. or 120 sqm." />
                    </div>
                    <div class="col-md-3 col-6">
                        <label for="popertyPrice" class="form-label">Proposed Price </label>
                        <input type="number" class="form-control" id="proposedPrice"
                            placeholder="Ex. PHP 500,000" />
                    </div>
                    <div class="container p-0 m-0">
                        <div class="row g-2">
                            <label for="popertyPrice" class="form-label">Unit Address</label>
                            <div class="col-md-4">
                                <div class="form-floating mb-2">
                                    <input type="address" class="form-control" id="barangay"
                                        placeholder="House No./Street/Barangay" />
                                    <label for="floatingInput">House No./Street/Barangay</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-2">
                                    <input type="address" class="form-control" id="municipality"
                                        placeholder="Municipality" />
                                    <label for="floatingInput">Municipality</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-2">
                                    <input type="address" class="form-control" id="province"
                                        placeholder="Province" />
                                    <label for="floatingInput">Province</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="textArea" class="form-label">Brief Description of the Property</label>
                        <textarea class="form-control" id="textArea" rows="6"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary p-3">Submit Listing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
