<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//normal user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

//property
Route::post('/createproperty', [App\Http\Controllers\PropertyController::class, 'create'])->name('createproperty');
Route::get('/editproperty/{id}', [App\Http\Controllers\PropertyController::class, 'edit'])->name('editproperty');
Route::post('/updateproperty', [App\Http\Controllers\PropertyController::class, 'update'])->name('updateproperty');
Route::get('/destroyproperty/{id}', [App\Http\Controllers\PropertyController::class, 'destroy'])->name('destroy');


//admin auth
Route::prefix('admin')->middleware('auth', 'admin')->group(function() {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});
