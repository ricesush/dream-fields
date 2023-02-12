@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
<div class="container">
  <p>Edit Unit info.</p>
  <a href="{{ route('admin') }}" class="btn btn-light btn-sm">← Go back</a>
  <div class="card py-5 px-4 mt-3 col-md-8 shadow-lg">
    @if($errors->any())
    <div class="mb-3">
        @foreach($errors->all() as $error)
            <span class="text-danger fw-bold">{{$error}}</span><br>
        @endforeach
    </div>        
    @endif
      <form method="POST" action="{{ route('updateproperty') }}">
          @csrf
          <div class="container">
            <div class="row">
          <div class="mb-3 col-md-2">
              <label for="unitNumber" class="form-label">Unit Number</label>
              <input type="number" class="form-control" id="unitNumber" name="unitNumber" value="{{ $property->unitNumber }}" required>
          </div>
          <div class="mb-3 col-md-2">
            <label for="floorArea" class="form-label">Floor Area</label>
            <input type="number" class="form-control" id="floorArea" name="floorArea" value="{{ $property->floorArea }}" required>
        </div>
        <div class="mb-3 col-md-2">
            <label for="unitPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="unitPrice" name="unitPrice" value="{{ $property->unitPrice }}" required>
        </div>
        <div class="mb-3 col-md-2">
            <label for="numBed" class="form-label">Bedroom</label>
            <input type="number" class="form-control" id="numBed" name="numBed" value="{{ $property->numBed }}" required>
        </div>
        <div class="mb-3 col-md-2">
            <label for="numBaths" class="form-label">Bathroom</label>
            <input type="number" class="form-control" id="numBaths" name="numBaths" value="{{ $property->numBaths }}" required>
        </div>
        <div class="mb-3 col-md-2">
            <label for="user_id" class="form-label">Unit Owner's ID</label>
            <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $property->user_id }}" required>
        </div>  
          </div>
          <div class="row">
          <div class="mb-3 col-md-2">
              <label for="unitStatus">Unit Status</label>
                    <select name="unitStatus" id="unitStatus">
                        <option value="For Sale" {{ $property->unitStatus == 'For Sale' ? 'selected' : '' }}>For Sale</option>
                        <option value="For Rent" {{ $property->unitStatus == 'For Rent' ? 'selected' : '' }}>For Rent</option>
                        <option value="Sold" {{ $property->unitStatus == 'Sold' ? 'selected' : '' }}>Sold</option>
                        <option value="Rented" {{ $property->unitStatus == 'Rented' ? 'selected' : '' }}>Rented</option>
                    </select>

                        {{-- <select name="unitStatus" id="unitStatus">                          
                            @if($property->unitStatus == 'For Sale')
                              <option value="For Sale"> For Sale </option>
                              <option value="For Rent"> For Rent </option>
                              <option value="Rented"> Rented </option>
                              <option value="Sold"> Sold </option>
                            @elseif($property->unitStatus == 'For Rent')
                              <option value="For Rent"> For Rent </option>
                              <option value="For Sale"> For Sale </option>
                              <option value="Rented"> Rented </option>
                              <option value="Sold"> Sold </option>
                            @elseif($property->unitStatus == 'Sold')
                              <option value="Sold"> Sold </option>
                              <option value="For Rent"> For Rent </option>
                              <option value="For Sale"> For Sale </option>
                              <option value="Rented"> Rented </option>
                            @elseif($property->unitStatus == 'Rented')
                              <option value="Rented"> Rented </option>
                              <option value="Sold"> Sold </option>
                              <option value="For Rent"> For Rent </option>
                              <option value="For Sale"> For Sale </option>
                            @endif
                        </select>              --}}
          </div>
          <div class="mb-3 col-md-2">
            <label for="unitType">Unit Type</label>
                  <select name="unitType" id="unitType">
                      <option value="Studio" {{ $property->unitType == 'Studio' ? 'selected' : '' }}>Studio</option>
                      <option value="Loft" {{ $property->unitType == 'Loft' ? 'selected' : '' }}>Loft</option>
                      <option value="Bedroom Unit" {{ $property->unitType == 'Bedroom Unit' ? 'selected' : '' }}>Bedroom Unit</option>
                      <option value="Penthouse Unit" {{ $property->unitType == 'Penthouse Unit' ? 'selected' : '' }}>Penthouse Unit</option>
                      <option value="Bi-Level Unit" {{ $property->unitType == 'Bi-Level Unit' ? 'selected' : '' }}>Bi-Level Unit</option>
                  </select>      
                </div> 
                <div class="mb-3 col-md-2 ps-5">
                <label for="hasParking">Parking Lot</label>
                  <select name="hasParking" id="hasParking">
                      <option value="none" {{ $property->hasParking == 'none' ? 'selected' : '' }}>none</option>
                      <option value="1" {{ $property->hasParking == '1' ? 'selected' : '' }}>1</option>
                      <option value="2" {{ $property->hasParking == '2' ? 'selected' : '' }}>2</option>
                  </select>                         
                </div>
            </div> 
        </div>
              <input type="hidden" name="id" value="{{ $property->id }}">
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>         

@endsection


