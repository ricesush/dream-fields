<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
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
Route::get('/sellpage', function () {return view('buysellrent/sellpage');})->name('sellpage');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/addtofav', [FavouriteController::class, 'addtofav'])->name('addtofav');

Route::prefix('/')->group(function() {
    Route::controller(PropertyController::class)->group(function () {
        Route::get('/aboutus', 'aboutus')->name('aboutus');
        Route::get('/buypage', 'buyunit')->name('buypage');
        Route::get('/rentpage', 'rentunit')->name('rentpage');
        Route::get('/search', 'search')->name('search');
        Route::post('/createproperty', 'create')->name('createproperty');
    });
});

//user auth
Route::prefix('user')->middleware('auth')->group(function() {
    Route::controller(ListingController::class)->group(function () {
        // Route::get('/', 'index')->name('admin');
        Route::get('/listing','index')->name('listing');
        Route::get('/ownedunits', 'owned')->name('ownedunits');
        Route::get('/dashboard', 'dashboard')->name('userdashboard');
    });
});

//admin auth
Route::prefix('admin')->middleware('auth', 'admin')->group(function() {
        // AdminController
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'index')->name('admin');
            Route::get('/pendingunits', 'pending')->name('pendingunits');
            Route::get('/condounits', 'approved')->name('condounits');
            Route::get('/condounitss', 'approved1')->name('condounits1');
            Route::get('/backlogs', 'backlogs')->name('backlogs');
            Route::get('/users', 'users')->name('userspage');
            Route::get('/editunit/{id}', 'edit')->name('editunit');
            Route::get('/deleteunit/{id}', 'destroy')->name('deleteunit');
            Route::get('/edituser/{id}', 'edituser')->name('edituser');
            Route::get('/deleteuser/{id}', 'destroyuser')->name('deleteuser');
            Route::post('/updateuser', 'update')->name('updateuser');
            Route::get('/searchApprovedProperties', 'approved')->name('searchApprovedProperties');
            Route::get('/usersearch', 'users')->name('usersearch');
            Route::get('/pendingsearch', 'pending')->name('searchpending');
            Route::get('/deniedsearch', 'backlogs')->name('searchdenied');
        });
        // PropertyController
        Route::controller(PropertyController::class)->group(function () {
            Route::post('/approveunit', 'approve')->name('approveunit');
            Route::post('/denyunit', 'deny')->name('denyunit');
            Route::post('/updateproperty', 'update')->name('updateproperty');
        });
    });

// pending routes
Route::get('/inquire', function () {return view('inquire');})->name('inquire');







