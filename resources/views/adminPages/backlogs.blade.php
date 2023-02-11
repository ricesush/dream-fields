@extends('layouts.adminLayout')


@section('header')
<h1 class="h2">Backlogs</h1>
@endsection

@section('content')
    <div class="container" style="height: 600px; overflow-y: scroll;">
            <table class="table table-hover text-center table-sm">
                <thead>
                    <tr>
                        <th>Unit Number</th>
                        <th>Unit Type</th>
                        <th>Unit Owner</th>
                        <th>Lsting Type</th>
                        <th>Price</th>
                        <th>Action</th>
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
                            <form method="POST" action={{ route('approveunit') }} style="display:inline-block">
                            @csrf
                                <input type="hidden" value="{{ $property->id }}" name="id">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></button>
                            </form>
                            <form method="POST" action={{ route('denyunit') }} style="display:inline-block">
                            @csrf
                                <input type="hidden" value="{{ $property->id }}" name="id">
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-x"></i></button>
                            </form>
                        </td>
                        
                    </tr>
                   @endif
                 @endforeach
                             
                </tbody>
            </table>
        </div>

@endsection


