@extends('layouts.app')
@section('content')
<h3 class="ml-10">Hello! <strong>{{ Auth::user()->name }}</strong></h3>
<div class="text-center">
  <h1 class='text-3xl font-bold text-gray-800 mb-2'>Would you like to list a property <br />in our website?</h1>
  <h5 class='text-base text-gray-600'>Help us, help you! Kindly fill the form and get started.</h5>
</div>


@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-5" role="alert">
  @foreach($errors->all() as $error)
    <span class="block">{{$error}}</span><br>
  @endforeach
</div>        
@endif
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
        <label for="title" class="block text-gray-700 font-bold mb-2">Unit Type:</label>
        <select id="title" name="title" class="w-full border border-gray-400 p-2">
          <option value="1 Bedroom Standard">1 Bedroom Standard</option>
          <option value="1 Bedroom Deluxe">1 Bedroom Deluxe</option>
          <option value="2 Bedrooms Standard" >2 Bedrooms Standard</option>
          <option value="2 Bedrooms Deluxe" >2 Bedrooms Deluxe</option>
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
