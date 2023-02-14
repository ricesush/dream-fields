@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Backlogs</h1>
@endsection

@section('content')
<div class="tab">
  <div class="search-form">
    <form action="{{ route('searchdenied') }}" method="GET">
      <input type="text" name="search" placeholder="Search by Unit Number..." value="{{ request('search') }}">
      <button type="submit">Search</button>
    </form>
  </div>
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
      @if($property->isApproved == 'Denied')
        <tr>
          <td>{{ $property->unitNumber }}</td>
          <td>{{ $property->unitType }}</td>
          <td>{{ $property->user->name }}</td>
          <td>{{ $property->unitStatus }}</td>
          <td>₱{{ $property->unitPrice }}</td>
          <td>
            <a class="btn btn-danger" href="{{ route('deleteunit', $property->id) }}"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
      @endif
    @endforeach
  </tbody>
</table>
{{ $properties->links() }}
</div>

@endsection


