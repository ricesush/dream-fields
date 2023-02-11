<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;


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
Route::get('/rentpage', function () {return view('buysellrent/rentpage')->with('properties', Property::orderBy('created_at', 'desc')->get());})->name('rentpage');
Route::get('/sellpage', function () {return view('buysellrent/sellpage');})->name('sellpage');


// test routes
Route::get('/search', [PropertyController::class, 'search'])->name('search');
// Route::get('/search1', [PropertyController::class, 'search'])->name('search');

//user auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addtofav', [App\Http\Controllers\FavouriteController::class, 'addtofav'])->name('addtofav');
Route::post('/createproperty', [PropertyController::class, 'create'])->name('createproperty');
Route::post('/approveunit', [PropertyController::class, 'approve'])->name('approveunit');
Route::post('/denyunit', [PropertyController::class, 'deny'])->name('denyunit');
Route::post('/updateproperty', [PropertyController::class,'update'])->name('updateproperty');
Route::post('/updateuser', [AdminController::class, 'update'])->name('updateuser');

//admin auth
Route::prefix('admin')->middleware('auth', 'admin')->group(function() {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin');
        Route::get('/pendingunits', 'pending')->name('pendingunits');
        Route::get('/condounits', 'approved')->name('condounits');
        Route::get('/users', 'users')->name('userspage');
        Route::get('/editunit/{id}', 'edit')->name('editunit');
        Route::get('/deleteunit/{id}', 'destroy')->name('deleteunit');
        Route::get('/edituser/{id}', 'edituser')->name('edituser');
        Route::get('/deleteuser/{id}', 'destroyuser')->name('deleteuser');
    });
    
    Route::controller(PropertyController::class)->group(function () {
        // Route::post('/createproperty', 'create')->name('admin.createproperty');
        // Route::get('/editproperty/{id}', 'edit')->name('admin.editproperty');
        // Route::post('/updateproperty', 'update')->name('admin.updateproperty');
        // Route::get('/destroyproperty/{id}', 'destroy')->name('admin.destroy');
    });


    });


    //admin auth
Route::prefix('user')->middleware('auth')->group(function() {
    Route::controller(ListingController::class)->group(function () {
        // Route::get('/', 'index')->name('admin');
        Route::get('/listing','index')->name('listing');
    });

    // Route::controller(PropertyController::class)->group(function () {
    //     Route::post('/createproperty', 'create')->name('admin.createproperty');
    //     Route::get('/editproperty/{id}', 'edit')->name('admin.editproperty');
    //     Route::post('/updateproperty', 'update')->name('admin.updateproperty');
    //     Route::get('/destroyproperty/{id}', 'destroy')->name('admin.destroy');
    });
   






