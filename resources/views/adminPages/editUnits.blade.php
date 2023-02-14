@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
  <div class="mb-6">
    <p class="text-lg font-medium">Edit Unit info.</p>
  </div>
  <div class="mb-6">
    <a href="{{ route('admin') }}" class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">← Go back</a>
  </div>
  <div>
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      @foreach($errors->all() as $error)
        <span class="block">{{$error}}</span>
      @endforeach
    </div>        
    @endif
 
<form class="form3" method="POST" action="{{ route('updateproperty') }}">
  @csrf
  <div class="flex flex-wrap -mx-4">

    <div class="w-full md:w-1/3 px-4">
      <div class="form-group">
        <label for="unitNumber" class="block font-medium text-gray-700 mb-2">Unit Number</label>
        <input type="number" class="form-control input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400" id="unitNumber" name="unitNumber" value="{{ $property->unitNumber }}" required>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-4">
      <div class="form-group">
        <label for="user_id" class="block font-medium text-gray-700 mb-2">Unit Owner's ID</label>
        <input type="number" class="form-control input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400" id="user_id" name="user_id" value="{{ $property->user_id }}" required>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-4">
      <div class="form-group">
        <label for="unitPrice" class="block font-medium text-gray-700 mb-2">Price</label>
        <input type="number" class="form-control input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400" id="unitPrice" name="unitPrice" value="{{ $property->unitPrice }}" required>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-4 mt-5">
      <div class="form-group">
        <label for="numBed" class="block font-medium text-gray-700 mb-2">Bedroom</label>
        <input type="number" class="form-control input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400" id="numBed" name="numBed" value="{{ $property->numBed }}" required>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-4 mt-5">
      <div class="form-group">
        <label for="numBaths" class="block font-medium text-gray-700 mb-2">Bathroom</label>
        <input type="number" class="form-control input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400" id="numBaths" name="numBaths" value="{{ $property->numBaths }}" required>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-4 mt-5">
      <div class="form-group">
        <label for="floorArea" class="block font-medium text-gray-700 mb-2">Floor Area</label>
        <input type="number" class="form-control input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400" id="floorArea" name="floorArea" value="{{ $property->floorArea }}" required>
      </div>
  </div>

    <div class="form-group w-full md:w-1/3 lg:w-1/4 mt-5">
      <label for="unitType" class="block mb-2 font-bold text-gray-700">unitType</label>
      <select class="form-select w-full" name="unitType" id="unitType">
        <option value="1 Bedroom Standard" {{ $property->unitType == '1 Bedroom Standard' ? 'selected' : '' }}>1 Bedroom Standard</option>
        <option value="1 Bedroom Deluxe" {{ $property->unitType == '1 Bedroom Deluxe' ? 'selected' : '' }}>1 Bedroom Deluxe</option>
        <option value="2 Bedrooms Standard" {{ $property->unitType == '2 Bedrooms Standard' ? 'selected' : '' }}>2 Bedrooms Standard</option>
        <option value="2 Bedrooms Deluxe" {{ $property->unitType == '2 Bedrooms Deluxe' ? 'selected' : '' }}>2 Bedrooms Deluxe</option>
      </select> 
    </div>        
    
    <div class="form-group w-full md:w-1/3 lg:w-1/4 mt-5">
      <label for="unitStatus" class="block mb-2 font-bold text-gray-700">Unit Status</label>
      <select class="form-select w-full" name="unitStatus" id="unitStatus">
        <option value="For Sale" {{ $property->unitStatus == 'For Sale' ? 'selected' : '' }}>For Sale</option>
        <option value="For Rent" {{ $property->unitStatus == 'For Rent' ? 'selected' : '' }}>For Rent</option>
        <option value="Sold" {{ $property->unitStatus == 'Sold' ? 'selected' : '' }}>Sold</option>
        <option value="Rented" {{ $property->unitStatus == 'Rented' ? 'selected' : '' }}>Rented</option>
      </select> 
    </div>
  
    <div class="form-group w-full md:w-1/3 lg:w-1/4 mt-5">
      <label for="hasParking" class="block mb-2 font-bold text-gray-700">Parking Lot</label>                
      <select class="form-select w-full" name="hasParking" id="hasParking">
        <option value="none" {{ $property->hasParking == 'none' ? 'selected' : '' }}>none</option>
          <option value="1" {{ $property->hasParking == '1' ? 'selected' : '' }}>1</option>
          <option value="2" {{ $property->hasParking == '2' ? 'selected' : '' }}>2</option>
        </select>
      </div>
      <input type="hidden" name="id" value="{{ $property->id }}">
    <button type="submit" class="ml-auto mr-10 mt-10  bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600">Submit</button>
  </div>
  
</form>

</div>
</div>


@endsection


