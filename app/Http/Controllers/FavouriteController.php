<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public function addtofav(Request $request){
        $favourite = Favourite::where(['user_id' => Auth::user()->id, 'property_id' => $request->property_id])->first();

        $reaction->user_id = Auth::user()->id;
        $reaction->property_id = $request->property_id;
        $reaction->save();

        return redirect()->route('home')->with('success', "Added to favourites!");
    }
}
