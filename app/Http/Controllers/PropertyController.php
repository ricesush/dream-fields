<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'unitNumber' => 'required|unique:properties|max:1000',
            'unitType' => 'required',
            'unitStatus' => 'required',
            'unitPrice' => 'required|integer',
            'user_id' => 'required|exists:users,id',
        ]);


        $property = new Property;
        $property->unitNumber = $request->unitNumber;
        $property->unitType = $request->unitType;
        $property->unitStatus = $request->unitStatus;
        $property->unitPrice = $request->unitPrice;
        $property->user_id = $request->user_id;

        $property->save();
        return redirect()->route('listing')->with('success', "new unit added!");
    }

    public function approve(Request $request){
        
        $property = Property::find($request->id);
        $property->isApproved = 'Approved';

        $property->save();

        return redirect('admin/pendingunits');
    }

    public function deny(Request $request){
        
        $property = Property::find($request->id);
        $property->isApproved = 'Denied';

        $property->save();

        return redirect('admin/pendingunits');
    }

    public function edit($id)
    {
        $property = Property::find($id);

        return view('admin/editunits')->with('property', $property);
    }

    public function update(Request $request)
    {

        $request->validate([
            'unitNumber' => 'required|max:4',
            'unitType' => 'required|string',
            'floorArea' => 'required|integer',
            'numBed' => 'required|integer|max:3',
            'numBaths' => 'required|integer|max:3',
            
            'hasParking' => 'required|max:4',
            'unitStatus' => 'required|string',
            'unitPrice' => 'required|integer|max:1000000000',
            'user_id' => 'required|exists:users,id',
        ]);

        $property = Property::find($request->id);

        $property->title = $request->title;
        $property->unitNumber = $request->unitNumber;
        $property->unitType = $request->unitType;
        $property->unitStatus = $request->unitStatus;
        $property->floorArea = $request->floorArea;
        $property->numBed = $request->numBed;
        $property->unitPrice = $request->unitPrice;
        $property->numBaths = $request->numBaths;
        $property->hasParking = $request->hasParking;
        $property->user_id = $request->user_id;
        $property->save();

        return redirect()->route('condounits')->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect()->route('home')->with('success', 'Property deleted successfully!');
    }


    public function buyunit()
    {
        $properties = Property::orderBy('created_at', 'desc')
        ->whereIn('isApproved', ['Approved'])
        ->paginate(10);

        return view('buysellrent/buypage', ['properties' => $properties->withPath('buypage')])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function rentunit()
    {
        $properties = Property::orderBy('created_at', 'desc')
        ->whereIn('isApproved', ['Approved'])
        ->paginate(10);

        return view('buysellrent/rentpage', ['properties' => $properties->withPath('buypage')])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
