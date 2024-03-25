<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotRequest;
use App\Http\Requests\ResetRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



class ForgotPasswordController extends Controller
{
    public function changePasswordProfile(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            $error = $validator->errors()->first();
        return response()->json(['error' => $error], 400);
        }

        // Retrieve the authenticated user
        $user = auth()->user();

        // Verify if the current password matches the user's actual password
        if (!Hash::check($request->current_password, $user->Password)) {
            return response()->json(['error' => 'Current password is incorrect'], 400);
        }

        // Update the user's password with the new password
        try {
            $user->password = Hash::make($request->new_password);
            $user->save();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update password. Please try again.'], 500);
        }

        // Optionally, you can return a success message or any additional data
        return response()->json(['message' => 'Password changed successfully'], 200);
    }

    public function passwordResetLink(ForgotRequest $request)
    {
        $email = $request->input('email');
        if (User::where('email', '=', $email)->doesntExist()) {
            return response()->json(['message' => 'Email not found'], 400);
        }
        $user = User::where('email', '=', $email)->first();
        $token = Str::random(10);
        try {
            DB::table('password_reset_tokens')->insert([
                'email' => $email,
                'token' => $token
            ]);
            Mail::send('mail.mailtemplate', ['token' => $token, 'user' => $user['Username']], function (Message $message) use ($email) {
                $message->to($email);
                $message->subject('Reset Password');
            });
            return response([
                'message' => 'Reset password link send successfully'
            ]);
        } catch (\Exception $e) {
            return response([
                'message' => $e->getMessage(),
            ], 400);
        }

    }
    public function passwordReset(ResetRequest $request)
    {
        $token = $request->input('token');
        if (!$passwordReset = DB::table('password_reset_tokens')->where('token', $token)->first()) {
            return response([
                'message' => 'Invalid token'
            ], 400);
        }
        if (!$user = User::where('email', $passwordReset->email)->first()) {
            return response([
                'message' => 'User doesn\'t email'
            ], 404);
        }
        $user->password = Hash::make($request->input('password'));
        $user->save();
        DB::table('password_reset_tokens')->where('token', $token)->delete();
        return response([
            'message' => 'Success Password Reset'
        ]);
    }
}
