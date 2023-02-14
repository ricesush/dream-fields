@extends('layouts.app')
@section('content')

<div class="text-center">
  <h1 class='text-3xl font-bold text-gray-800 mb-2'>Would you like to list a property <br />in our website?</h1>
  <h5 class='text-base text-gray-600'>Help us, help you! Kindly fill the form and get started.</h5>
</div>

<div class="flex items-center justify-center mt-20">
  <div class="w-1/3">
    <form method="POST" action="{{route('createproperty')}}" class="bg-white p-4 rounded-lg shadow-md">
      @csrf
      <div class="mb-4">
        <label for="unitNumber" class="block text-gray-700 font-bold mb-2">Unit Number:</label>
        <input type="number" id="unitNumber" name="unitNumber" class="w-full border border-gray-400 p-2">
      </div>
      
      <div class="mb-4">
        <label for="unitPrice" class="block text-gray-700 font-bold mb-2">Unit Price:</label>
        <input type="number" id="unitPrice" name="unitPrice" class="w-full border border-gray-400 p-2">
      </div>
      
      <div class="mb-4">
        <label for="unitType" class="block text-gray-700 font-bold mb-2">Unit Type</label>
        <select id="unitType" name="unitType" class="w-full border border-gray-400 p-2">
          <option value="1 Bedroom Standard">1 Bedroom Standard</option>
          <option value="1 Bedroom Deluxe">1 Bedroom Deluxe</option>
          <option value="2 Bedrooms Standard">2 Bedrooms Standard</option>
          <option value="2 Bedrooms Deluxe">2 Bedrooms Deluxe</option>
        </select>
      </div>
      
      <div class="mb-4">
        <label for="unitStatus" class="block text-gray-700 font-bold mb-2">List Unit:</label>
        <select id="unitStatus" name="unitStatus" class="w-full border border-gray-400 p-2">
          <option value="For rent">For rent</option>
          <option value="For sale">For sale</option>
        </select>
      </div>
      
      <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
      <div class="text-center mt-4">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
