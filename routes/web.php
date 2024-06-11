<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\facilityController;
use App\Http\Controllers\bookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bookings', [bookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [bookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [bookingController::class, 'store'])->name('bookings.store');
Route::resource('bookings', BookingController::class);
Route::resource('facilities', facilityController::class);
Route::patch('/bookings/{id}/confirm', [BookingController::class, 'confirm'])->name('bookings.confirm');
Route::patch('/bookings/{id}/unconfirm', [BookingController::class, 'unconfirm'])->name('bookings.unconfirm');
Route::get('history', [BookingController::class, 'history'])->name('bookings.history');

