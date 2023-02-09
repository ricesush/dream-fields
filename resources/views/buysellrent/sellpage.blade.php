@extends('layouts.buysellrent')

@section('content')

    <div class="Bsr-banner-sell">
        <div class='banner-title position-absolute top-50 start-50 translate-middle fw-bolder'> </div>
    </div>
    <div class="container-lg  mb-5 pb-5 px-3 col-lg-6 bg-white rounded-4">
        <div class="text-center py-3 rounded-4">
            <div class="bg-card-body  text-center py-5 rounded-4">
                <h1 class='fw-bolder'>Would you like to list a property <br />in our website?</h1>
                <h5 class='mt-2'>Help us, help you! Kindly fill the form and get started.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <form class="row g-2 fw-bold mt-2" method="POST" action="{{route('createproperty')}}">
                    @csrf
                    <div class="mb-3 col-md-6">
                        <label for="unitNumber" class="form-label">Unit Number</label>
                        <input type="number" class="form-control" id="unitNumber" name="unitNumber">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="unitPrice" class="form-label">Unit Price</label>
                        <input type="number" class="form-control" id="unitPrice" name="unitPrice">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="unitType" class="form-label">Unit Type</label>
                        <select class="form-select" id="unitType" name="unitType">
                            <option>Choose</option>
                            <option value="Studio">Studio</option>
                            <option value="Loft">Loft</option>
                            <option value="Bedroom Unit">Bedroom Unit</option>
                            <option value="Penthouse Unit">Penthouse Unit</option>
                            <option value="Bi-level Unit">Bi-level Unit</option>
                          </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="unitStatus" class="form-label">List unit as</label>
                        <select class="form-select" id="unitStatus" name="unitStatus">
                            <option>Choose</option>
                            <option value="For rent">For rent</option>
                            <option value="For sale">For sale</option>

                          </select>
                          <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>                   
                </form>
            </div>
        </div>
    </div>
@endsection
