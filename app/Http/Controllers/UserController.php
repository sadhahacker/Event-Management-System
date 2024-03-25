<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function getUser()
    {
        $users = User::all();
        return response()->json($users);
    }
    public function getProfile(){
        $user = auth()->user()->only(['Firstname', 'Lastname', 'Email', 'Username', 'City', 'State', 'Zip', 'MobileNumber']);
        return response()->json($user);
    }
    public function updateProfile(Request $request)
{
    $user = auth()->user();
    $user->update($request->all());
    return response()->json(['message'=>'Update profile success'],200);
}
public function getSpecificUser(Request $request) {
    $userId = $request->userId;
    // Find the user by ID
    $user = User::find($userId);

    // Check if the user exists
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    return response()->json($user);
}
public function deleteUser(Request $request) {
    $userId = $request->userId;
    // Find the user by ID
    $user = User::find($userId);

    // Check if the user exists
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Delete the user
    $user->delete();

    return response()->json(['message' => 'User deleted successfully'], 200);
}
public function updateUser(Request $request)
    {
        $userId = $request->input('userId');
        $user = User::find($userId);

        // Update user data
        $user->Firstname = $request->input('firstname');
        $user->Lastname = $request->input('lastname');
        $user->Username = $request->input('username');
        $user->UserType = $request->input('role');
        $user->MobileNumber = $request->input('mobilenumber');

        // Save updated user data
        $user->save();

        return response()->json(['message' => 'User updated successfully']);
    }
}
