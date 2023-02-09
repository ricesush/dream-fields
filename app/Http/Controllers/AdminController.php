<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin')->with('properties', Property::orderBy('created_at', 'desc')->get());
    }
    
    public function pending()
    {
        return view('adminPages/pendingunits')->with('properties', Property::orderBy('created_at', 'desc')->get());
    }

    public function approved()
    {
        return view('adminPages/condounits')->with('properties', Property::orderBy('created_at', 'desc')->get());
    }

    public function users()
    {
        return view('adminPages/users')->with('users', User::all());
    }

    public function edit($id)
    {
        $property = Property::find($id);

        return view('adminPages/editunits')->with('property', $property);
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect()->route('condounits')->with('success', 'Property deleted successfully!');
    }
}
