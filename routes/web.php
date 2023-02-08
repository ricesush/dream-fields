<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;

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
Route::get('/buy', function () {return view('buysellrent/buypage');})->name('buypage');
Route::get('/rent', function () {return view('buysellrent/rentpage');})->name('rentpage');
Route::get('/sell', function () {return view('buysellrent/sellpage');})->name('sellpage');

//user auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/createproperty', [App\Http\Controllers\PropertyController::class, 'create'])->name('createproperty');
// Route::get('/editproperty/{id}', [App\Http\Controllers\PropertyController::class, 'edit'])->name('editproperty');
// Route::post('/updateproperty', [App\Http\Controllers\PropertyController::class, 'update'])->name('updateproperty');
// Route::get('/destroyproperty/{id}', [App\Http\Controllers\PropertyController::class, 'destroy'])->name('destroy');

//admin auth
Route::prefix('admin')->middleware('auth', 'admin')->group(function() {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin');

    });

    Route::controller(PropertyController::class)->group(function () {
        Route::post('/createproperty', 'create')->name('admin.createproperty');
        Route::get('/editproperty/{id}', 'edit')->name('admin.editproperty');
        Route::post('/updateproperty', 'update')->name('admin.updateproperty');
        Route::get('/destroyproperty/{id}', 'destroy')->name('admin.destroy');
    });

    Route::get('/condounits', function () { return view('adminPages/condoUnits'); })->name('admin.condounits');
});
