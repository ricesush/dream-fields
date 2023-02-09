<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;

use App\Models\Property;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

//guest
Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/amenities', function () {return view('amenities');})->name('amenities');
Route::get('/inquire', function () {return view('inquire');})->name('inquire');
Route::get('/aboutus', function () {return view('aboutus');})->name('aboutus');
Route::get('/buypage', function () {return view('buysellrent/buypage')->with('properties', Property::orderBy('created_at', 'desc')->get());})->name('buypage');
Route::get('/rentpage', function () {return view('buysellrent/rentpage');})->name('rentpage');
Route::get('/sellpage', function () {return view('buysellrent/sellpage');})->name('sellpage');


//user auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/createproperty', [PropertyController::class, 'create'])->name('createproperty');

//admin auth
Route::prefix('admin')->middleware('auth', 'admin')->group(function() {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin');
    });

    // Route::controller(PropertyController::class)->group(function () {
    //     Route::post('/createproperty', 'create')->name('admin.createproperty');
    //     Route::get('/editproperty/{id}', 'edit')->name('admin.editproperty');
    //     Route::post('/updateproperty', 'update')->name('admin.updateproperty');
    //     Route::get('/destroyproperty/{id}', 'destroy')->name('admin.destroy');
    });

    Route::get('/condounits', function () { return view('adminPages/condoUnits'); })->name('admin.condounits');   


Route::get('/pendingunits', [AdminController::class, 'pending'])->name('pendingunits');




