<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function create(Request $request){
        $property = new Property;
        $property->unitNumber = $request->unitNumber;
        $property->unitType = $request->unitType;
        $property->unitStatus = $request->unitStatus;
        $property->unitPrice = $request->unitPrice;
        $property->user_id = $request->user_id;

        $property->save();
        return redirect()->route('sellpage')->with('success', "new unit added!");
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
        $property = Property::find($request->id);

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
}
