<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('authentication/login');
    })->name('login');

    Route::get('register', function () {
        return view('authentication/register');
    });

    Route::get('recover', function () {
        return view('authentication/recover');
    });

    Route::get('reset', function () {
        return view('authentication/resetpassword');
    });
});

// Routes accessible by authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if(Gate::allows('isAdmin')){
            return view('admin/dashboard');
        }else{
            return view('notfound');
        }
    });

    Route::get('/categories', function () {
        if(Gate::allows('isAdmin')){
            return view('admin/categories');
        }else{
            return view('notfound');
        }
    });

    Route::get('/booking', function () {
        if(Gate::allows('isAdmin')){
            return view('admin/booking');
        }else{
            return view('notfound');
        }
    });

    Route::get('/events', function () {
        if(Gate::allows('isAdmin')){
            return view('admin/events');
        }else{
            return view('notfound');
        }
    });

    Route::get('/users', function () {
        if(Gate::allows('isAdmin')){
            return view('admin/users');
        }else{
            return view('notfound');
        }
    });

    Route::get('myevent', function () {
        if(Gate::allows('isUser')){
            return view('attendee/myevents');
        }else{
            return view('notfound');
        }
    });

    Route::get('profile', function () {
        if(Gate::allows('isUser')){
            return view('attendee/profile');
        }else{
            return view('notfound');
        }
    });
});

// Public routes
Route::get('home', function () {
    return view('attendee/attendee');
});

Route::get('event', function () {
    return view('attendee/events');
});

Route::get('/',function(){
    return view('attendee/attendee');
});

// Language switcher route
Route::get('lang/{locale}',[LangController::class,'changeLanguage']);

// Testing routes
Route::get('log',[LoginController::class,'perform']);
Route::get('auth',[LoginController::class,'user']);
