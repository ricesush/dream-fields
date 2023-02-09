<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

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
        return view('admin')->with('properties', Property::orderBy('id', 'desc')->get());
    }
    
    public function pending()
    {
        return view('adminPages/pendingunits')->with('properties', Property::orderBy('id', 'desc')->get());
    }
}
