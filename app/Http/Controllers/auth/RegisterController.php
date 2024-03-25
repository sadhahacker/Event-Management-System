<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function store(Request $request)
{
    // Validate request data
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|min:5',
        'email' => 'required|string|email|max:255|unique:users,email', // unique validation rule added
        'password' => 'required|string|min:6',
        'mobilenumber' => 'required|integer|min:10',
    ], [
        'username.min' => 'Enter a valid username',
        'email.email' => 'Enter a valid email address',
        'email.unique' => 'Email already exists',
        'password.min' => 'Password must be at least 6 characters.',
        'mobilenumber.max' => 'Password must be at most 10',
        'mobilenumber.integer' => 'Password must Integer',
    ]);

    // If validation fails, return validation errors
    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422);
    }

    // Create a new user
    User::create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'mobilenumber' => $request->mobilenumber,
        'registrationdate' => Carbon::now(),
    ]);
    $mailuser = $request->email;
    Mail::send('mail.registertemplate',['user'=>$request->username],function(Message $message) use ($mailuser){
        $message->to($mailuser);
        $message->subject('Register Success');
    });
    // Return success response
    return response()->json([
        'status' => 'success',
        'message' => 'User registered successfully',
    ], 201);
    }
}
