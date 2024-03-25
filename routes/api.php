<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BuyTicketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/passwordResetlink', [ForgotPasswordController::class, 'passwordResetlink']);
Route::post('/passwordReset', [ForgotPasswordController::class, 'passwordReset']);
Route::get('/topevents', [EventController::class, 'topEvents']);
Route::get('/getevents', [EventController::class, 'getevents']);
Route::get('/singleEvent', [EventController::class, 'singleEvent']);

// Authenticated User routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    // User Profile routes
    Route::get('getProfile', [UserController::class, 'getProfile'])->middleware('can:isUser');
    Route::post('/updateProfile', [UserController::class, 'updateProfile'])->middleware('can:isUser');
    Route::post('changePasswordProfile', [ForgotPasswordController::class, 'changePasswordProfile'])->middleware('can:isUser');

    // Event-related routes for authenticated users
    Route::get('/myEvents', [EventController::class, 'myEvents'])->middleware('can:isUser');
    Route::get('/getSpecificMyEvent', [EventController::class, 'getSpecificMyEvent'])->middleware('can:isUser');
    Route::post('/buyTicket', [BuyTicketController::class, 'buyTicket'])->middleware('can:isUser');
});

// Admin routes
Route::middleware(['auth:sanctum', 'can:isAdmin'])->group(function () {
    // User management routes
    Route::get('/getusers', [UserController::class, 'getUser']);
    Route::get('/getSpecificUser', [UserController::class, 'getSpecificUser']);
    Route::post('/updateUser', [UserController::class, 'updateUser']);
    Route::delete('/deleteUser', [UserController::class, 'deleteUser']);

    // Event management routes
    Route::get('/getAllEvents', [EventController::class, 'getAllEvents']);
    Route::post('/addEvent', [EventController::class, 'create']);
    Route::post('/updateEvent', [EventController::class, 'updateEvent']);
    Route::delete('/deleteEvent', [EventController::class, 'deleteEvent']);

    // Booking management routes
    Route::get('/getBookings', [BookingController::class, 'getBookings']);
    Route::get('/getSpecificBookings', [BookingController::class, 'getSpecificBookings']);
    Route::delete('/deleteBooking', [BookingController::class, 'deleteBooking']);

    // Ticket and Category management routes
    Route::get('/gettickets', [TicketController::class, 'gettickets']);
    Route::get('/getcategory', [CategoryController::class, 'getcategory']);
    Route::get('/getCategoryName', [CategoryController::class, 'getCategoryName']);
    Route::get('/getSpecificCategory', [CategoryController::class, 'getSpecificCategory']);
    Route::post('/addcategory', [CategoryController::class, 'create']);
    Route::post('/updatecategory', [CategoryController::class, 'updateCategory']);
    Route::delete('/deletecategory', [CategoryController::class, 'deletecategory']);

    // Admin reports
    Route::get('/getreport', [AdminController::class, 'getreport']);
    Route::get('user', [LoginController::class, 'user']);
});
