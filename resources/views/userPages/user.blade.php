@extends('layouts.app')
@section('content')

      <div class="text-center">
          <h1 class='fw-bolder'>Would you like to list a property <br />in our website?</h1>
          <h5 class='mt-2'>Help us, help you! Kindly fill the form and get started.</h5>
      </div>

  <div class="row">
      <div class="col mt-4">
          <form method="POST" action="{{route('createproperty')}}">
              @csrf
              <label for="unitNumber">Unit Number:</label>
              <input type="number" id="unitNumber" name="unitNumber">
              
              <label for="unitPrice">Unit Price:</label>
              <input type="number" id="unitPrice" name="unitPrice">
              
              <label for="unitType">Unit Type:</label>
              <select id="unitType" name="unitType">
                <option value="Studio">Studio</option>
                <option value="Loft">Loft</option>
                <option value="Bedroom Unit">Bedroom Unit</option>
                <option value="Penthouse Unit">Penthouse Unit</option>
                <option value="Bi-level Unit">Bi-level Unit</option>
              </select>
              
              <label for="unitStatus">List Unit:</label>
              <select id="unitStatus" name="unitStatus">
                <option value="For rent">For rent</option>
                <option value="For sale">For sale</option>
              </select>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                <button type="submit" class="inputsubmit">Submit</button>                   
          </form>
      </div>
  </div>
@endsection
