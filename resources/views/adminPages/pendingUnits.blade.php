@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Pending Units</h1>
@endsection

@section('content')
<table class="styled-table">
  <thead>
    <tr>
      <th>Unit Number</th>
      <th>Unit Type</th>
      <th>Unit Owner</th>
      <th>Listing Type</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $properties as $property )
      @if($property->isApproved == 'Pending')
        <tr class="active-row">
          <td>{{ $property->unitNumber }}</td>
          <td>{{ $property->unitType }}</td>
          <td>{{ $property->user->name }}</td>
          <td>{{ $property->unitStatus }}</td>
          <td>₱{{ $property->unitPrice }}</td>
          <td>
            <form method="POST" action={{ route('approveunit') }} style="display:inline-block">
              @csrf
                <input type="hidden" value="{{ $property->id }}" name="id">
                <button type="submit" class="btn btn-success">
                  <i class="fas fa-check"></i>
                </button>
            </form>
            <form method="POST" action={{ route('denyunit') }} style="display:inline-block">
              @csrf
                <input type="hidden" value="{{ $property->id }}" name="id">
                <button type="submit" class="btn btn-danger">
                  <i class="fas fa-times"></i>
                </button>
            </form>
          </td>
        </tr>
      @endif
    @endforeach
  </tbody>
</table>

@endsection


