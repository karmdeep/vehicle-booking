<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


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
Route::get('/book-vehicle', [BookingController::class, 'create'])->name('book-vehicle');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

Route::get('/', function () {
    return view('welcome');
});
