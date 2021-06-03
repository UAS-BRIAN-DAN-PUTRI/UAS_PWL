<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\HalamanHomeController;

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

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('help', function () {
    return view('help');
});

Route::get('cart', function () {
    return view('cart');
});


// //for customer
// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     // Route::get('user.dashboard')
// })

// //for admin
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
//     // Route::get('admin.dashboard')
// })

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
