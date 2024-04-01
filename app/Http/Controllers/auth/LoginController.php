<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;


class LoginController extends Controller
{
    public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email', // unique validation rule added
        'password' => 'required|string|min:6',
    ], [
        'email.email' => 'Enter a valid email address',
        'password.min' => 'Password must be at least 6 characters.',
    ]);
    // If validation fails, return validation errors
    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422);
    }
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return response()->json(['email' => 'Enter a valid email address'],422);
    }
    if (!Hash::check($request->password, $user->Password)) {
        return response()->json(['password' => 'Enter a valid password'],422);
    }
    Auth::login($user);
    $data['token'] = $user->createToken($request->email)->plainTextToken;
    $data['user'] = $user;
    if ($user->UserType === 'admin') {
        return response()->json([
            "status" => true,
            "redirect" => url("dashboard"),
            'accessToken' =>$data['token'],
            'token_type' => 'Bearer',
            'message' => 'Login successful done',
        ],200);
    }
    elseif ($user->UserType === 'attendee') {
        return response()->json([
            "status" => true,
            "redirect" => url("home"),
            'accessToken' =>$data['token'],
            'token_type' => 'Bearer',
            'message' => 'Login successful',
        ],200);
    }
}

public function logout(Request $request)
{
    auth('sanctum')->user()->tokens()->delete();
    Session::flush();

    Auth::guard('web')->logout();
    return response()->json([
        'status' => true,
        'message' => 'User is logged out successfully',
        "redirect" => url("login"),
    ], 200);
}
public function user(Request $request)
{
    if (Gate::allows('isUser')) {
        // User is a guest (not logged in)
        $response['user'] = 'User is a user.';
    } else {
        // User is logged in
        $response['user']= 'User is guest';
    }
    // $user = Auth::user();
    // $response['user'] = $user;
    return response()->json($response,200);
}
public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
