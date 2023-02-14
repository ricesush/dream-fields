<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userPages/user');
    }

    public function owned(Request $request)
    {
        $searchTerm = $request->input('search');

        if ($searchTerm) {
            $properties = Property::where('isApproved', 'Approved')
                ->where(function($query) use ($searchTerm) {
                    $query->where('unitNumber', 'like', '%' . $searchTerm . '%');
                })
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        } else {
            $properties = Property::where('isApproved', 'Approved')
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        }

        return view('userPages/userOwned')->with('properties', $properties);
    }

    public function dashboard()
    {
        return view('userPages/userdashboard')->with('properties', Property::orderBy('created_at', 'desc')->get())
        ->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
