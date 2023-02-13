@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
<div class="container">
  <div class="backbtn">
  <p>Edit Unit info.</p>
  <div class="backbtn">
  <a class="btn btn-primary" href="{{ route('admin') }}" class="">← Go back</a>
  </div>
</div>
  <div>
    @if($errors->any())
    <div class="mb-3">
        @foreach($errors->all() as $error)
            <span class="text-danger fw-bold">{{$error}}</span><br>
        @endforeach
    </div>        
    @endif
    <div class="form3" method="POST" action="{{ route('updateproperty') }}">
      @csrf
          <div class="form-container">
              <div class="form-group">
                <label for="unitNumber">Unit Number</label>
                <input type="number" class="form-control input" id="unitNumber" name="unitNumber" value="{{ $property->unitNumber }}" required>
              </div>

              <div class="form-group">
                <label for="floorArea">Floor Area</label>
                <input type="number" class="form-control input" id="floorArea" name="floorArea" value="{{ $property->floorArea }}" required>
              </div>

              <div class="form-group">
                <label for="unitPrice">Price</label>
                <input type="number" class="form-control input" id="unitPrice" name="unitPrice" value="{{ $property->unitPrice }}" required>
              </div>

              <div class="form-group">
                <label for="numBed">Bedroom</label>
                <input type="number" class="form-control input" id="numBed" name="numBed" value="{{ $property->numBed }}" required>
              </div>

              <div class="form-group">
                <label for="numBaths">Bathroom</label>
                <input type="number" class="form-control input" id="numBaths" name="numBaths" value="{{ $property->numBaths }}" required>
              </div>

              <div class="form-group">
                <label for="user_id">Unit Owner's ID</label>
                <input type="number" class="form-control input" id="user_id" name="user_id" value="{{ $property->user_id }}" required>
              </div>

    <div class="form-group">
      <label for="unitStatus">Unit Status</label>
      <select class="form-control" name="unitStatus" id="unitStatus">
        <option value="For Sale" {{ $property->unitStatus == 'For Sale' ? 'selected' : '' }}>For Sale</option>
        <option value="For Rent" {{ $property->unitStatus == 'For Rent' ? 'selected' : '' }}>For Rent</option>
        <option value="Sold" {{ $property->unitStatus == 'Sold' ? 'selected' : '' }}>Sold</option>
        <option value="Rented" {{ $property->unitStatus == 'Rented' ? 'selected' : '' }}>Rented</option>
      </select> 
    </div>

    <div class="form-group">
      <label for="unitType">Unit Type</label>
      <select class="form-control" name="unitType" id="unitType">
        <option value="Studio" {{ $property->unitType == 'Studio' ? 'selected' : '' }}>Studio</option>
        <option value="Loft" {{ $property->unitType == 'Loft' ? 'selected' : '' }}>Loft</option>
        <option value="Bedroom Unit" {{ $property->unitType == 'Bedroom Unit' ? 'selected' : '' }}>Bedroom Unit</option>
        <option value="Penthouse Unit" {{ $property->unitType == 'Penthouse Unit' ? 'selected' : '' }}>Penthouse Unit</option>
        <option value="Bi-Level Unit" {{ $property->unitType == 'Bi-Level Unit' ? 'selected' : '' }}>Bi-Level Unit</option>
      </select>
    </div>

    <div class="form-group">
      <label for="hasParking">Parking Lot</label>                
      <select class="form-control" name="hasParking" id="hasParking">
        <option value="none" {{ $property->hasParking == 'none' ? 'selected' : '' }}>none</option>
        <option value="1" {{ $property->hasParking == '1' ? 'selected' : '' }}>1</option>
        <option value="2" {{ $property->hasParking == '2' ? 'selected' : '' }}>2</option>
      </select>
    </div>
      <div class="editunitsbtn">
          <input type="hidden" name="id" value="{{ $property->id }}">
          <button type="submit" class="btn btn-primary button1">Update</button>
        </div>
      </div>
      </form>
  </div>
</div>         

@endsection


