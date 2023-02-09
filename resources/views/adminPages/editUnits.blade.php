@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Condo Units</h1>
@endsection

@section('content')
<div class="container">
  <p>Edit Unit info.</p>
  <a href="{{ route('admin') }}" class="btn btn-light btn-sm">← Go back</a>
  <div class="card py-5 px-4 mt-3 col-md-6">
      <form method="POST" action="{{ route('updateproperty') }}">
          @csrf
          <div class="mb-3">
              <label for="unitNumber" class="form-label">Unit Number</label>
              <input type="number" class="form-control" id="unitNumber" name="unitNumber" value="{{ $property->unitNumber }}" required>
          </div>
          <div class="mb-3">
              @if($property->unitType = 'For Sale')
              <label for="membership_id">Unit Type</label>
                          <select name="membership_id" id="membership_id">
                              <option value="For Sale"> {{ $property->unitType }} </option>
                              <option value="1"> VIP </option>
                          </select>
              @else
              <label for="membership_id">Unit Type</label>
                <select name="membership_id" id="membership_id">
                    <option value="For Sale"> {{ $property->unitType }} </option>
                    <option value="1"> VIP </option>
                </select>
              @endif
          </div>          
              <input type="hidden" name="id" value="{{ $property->id }}">
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>         

@endsection


