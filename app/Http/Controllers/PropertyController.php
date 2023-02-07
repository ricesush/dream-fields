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
        $property->user_id = $request->user_id;

        $property->save();
        return redirect()->route('home')->with('success', "new unit added!");
    }

    public function edit($id)
    {
        $property = Property::find($id);

        return view('editproperty')->with('property', $property);
    }

    public function update(Request $request)
    {
        $property = Property::find($request->id);

        $property->unitNumber = $request->unitNumber;
        $property->user_id = $request->user_id;
        $property->save();

        return redirect()->route('home')->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect()->route('home')->with('success', 'Property deleted successfully!');
    }
}
