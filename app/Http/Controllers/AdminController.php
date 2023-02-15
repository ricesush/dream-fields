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
        return view('admin')->with('properties', Property::orderBy('created_at', 'desc')->get())
        ->with('users', User::all());
    }
    
    public function pending(Request $request)
    {

        $searchTerm = $request->input('search');

        if ($searchTerm) {
            $properties = Property::where('isApproved', 'Pending')
                ->where(function($query) use ($searchTerm) {
                    $query->where('unitNumber', 'like', '%' . $searchTerm . '%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(8);
        } else {
            $properties = Property::where('isApproved', 'Pending')
                ->orderBy('created_at', 'desc')
                ->paginate(8);
        }
        
        return view('adminPages/pendingunits')->with('properties', $properties);
    }



    public function approved(Request $request)
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

        return view('adminPages/condounits')->with('properties', $properties);
    }


    public function approved1()
    {
        return view('adminPages/condounits')->with('properties', Property::all()->get());
    }

    public function backlogs(Request $request)
    {
        $searchTerm = $request->input('search');

        if ($searchTerm) {
            $properties = Property::where('isApproved', 'Denied')
                ->where(function($query) use ($searchTerm) {
                    $query->where('unitNumber', 'like', '%' . $searchTerm . '%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(12);
        } else {
            $properties = Property::where('isApproved', 'Denied')
                ->orderBy('created_at', 'desc')
                ->paginate(12);
        }

        return view('adminPages/backlogs')->with('properties', $properties);
    }


    public function users(Request $request)
    {
        $searchTerm = $request->input('search');

        if ($searchTerm) {
            $users = User::where('name', 'like', '%' . $searchTerm . '%')
                ->orderBy('id', 'asc')
                ->paginate(10);
        } else {
            $users = User::orderBy('id', 'asc')->paginate(10);
        }

        return view('adminPages/users')->with('users', $users);
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

    public function edituser($id)
    {
        $user = User::find($id);

        return view('adminPages/editusers')->with('user', $user);
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
       

        return redirect()->route('userspage')->with('success', 'User updated successfully!');
    }

    public function destroyuser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('userspage')->with('success', 'Property deleted successfully!');
    }
}
