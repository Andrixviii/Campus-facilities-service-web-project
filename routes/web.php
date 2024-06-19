<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    RegisterController,
    LogoutController,
    facilityController,
    bookingController,
    accountController
};
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Account,
    booking_orders,
    booking_history,
    facility
};


use Andyabih\LaravelToUML\Http\Controllers\LaravelToUMLController;

// Guest Routes
Route::middleware(['guest'])->group(function () {
    Route::view('/', '/guest/index')->name('Home');
    Route::view('/biodata', '/guest/biodata')->name('signup_2');
    Route::post('/biodata', [RegisterController::class, 'Register']);
    Route::get('/login', [LoginController::class, 'get_view'])->name('login');
    Route::post('/login', [LoginController::class, 'Login']);
    Route::view('/signup', '/guest/signUp')->name('signup');
    Route::post('/signup', [RegisterController::class, 'retrieve_data']);
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/myadmin', function () {
        $facility_list = facility::all();
      
        return view('/authorized/Admin/index_admin', compact('facility_list'));
    })->name('admin');

    Route::get('/tableconfirm', function () {
        $booking_list = booking_orders::with('facility', 'Account')->get();
        return view('/authorized/Admin/TablesConfirm', compact('booking_list'));
    })->name('admin.confirm');

    Route::get('/accountdata', function () {
        $accounts = Account::all();
        return view('/authorized/Admin/DataUserTabel', compact('accounts'));
    })->name('admin.userlist');

    Route::get('/historybooking', function () {
        $history_list = booking_history::with('booking_orders')->get();
        return view('/authorized/Admin/HistoryAllUser', compact('history_list'));
    })->name('admin.history');

    Route::get('/Edit/{id}', [facilityController::class, 'edit'])->name('admin.edit');
    Route::post('/storefacilitydata/{id}', [facilityController::class, 'update'])->name('Facility_update');

    Route::patch('/bookings/{id}/confirm', [bookingController::class, 'confirm'])->name('bookings.confirm');
    Route::patch('/bookings/{id}/unconfirm', [bookingController::class, 'unconfirm'])->name('bookings.unconfirm');
});

// User Routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/myuser', function(){
      $user_data = Auth::user();
      return view('/authorized/User/Dashboard',compact('user_data'));
    })->name('user');

    Route::get('/historyuser', function () {
        $history_list = booking_history::with('booking_orders')->get();
        $user_id = Auth::user()->id;
        return view('/authorized/User/history', compact('history_list', 'user_id'));
    })->name('user.history');

    Route::get('/Profile', function () {
        $user_data = Auth::user();
        return view('/authorized/User/profil', compact('user_data'));
    })->name('user.profile');
    Route::post('/Profile', [accountController::class, 'edit']);

    Route::get('/Changepassword' , function(){
      $user_data = Auth::user();
      return view('/authorized/User/ChangePass',compact('user_data'));
    })->name('ChangePass');

    Route::patch('/Changepassword' , [accountController::class,'ChangePass']);

    Route::view('/BookingForm', '/authorized/User/TransactionForm', ['Facility' => facility::all()])->name('BookingForm');
    Route::post('/BookingForm', [bookingController::class, 'store']);

    Route::get('/EditBookingForm/{id}', [bookingController::class, 'edit'])->name('editForm');
    Route::patch('/booking/edit/{id}', [bookingController::class, 'update'])->name('booking.update');
    Route::delete('/booking/delete/{id}', [bookingController::class, 'destroy'])->name('booking.destroy');
});

// Booking Routes
Route::get('/bookings', [bookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [bookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [bookingController::class, 'store'])->name('bookings.store');

// Logout Routes
Route::post('/logout', [LogoutController::class, 'Logout']);
Route::get('/logout', [LogoutController::class, 'Logout'])->name('Logout');

// UML Route
Route::get('/uml', [LaravelToUMLController::class, 'index']);
