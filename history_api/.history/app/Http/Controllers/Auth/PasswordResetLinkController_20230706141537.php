<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth\DB;
use App\Models\PasswordReset;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;
class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
{
    return response()->json(['message' => 'Please request a password reset link.']);
}

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
   

    // ...
    
   
 
    
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => ['required', 'email'],
        ]);
    
        // Generate a reset token
        $token = Str::random(60);
    
        // Store the token in the password_resets table
        PasswordReset::create([
            'email' => $request->email,
            'token' => Hash::make($token),
            'created_at' => now(),
        ]);
    
        // Send the password reset link with the generated token
        $status = Password::sendResetLink(
            $request->only('email'),
            function ($user, $token) use ($request) {
                $user->sendPasswordResetNotification($token);
            }
        );
    
        // Check if the password reset link was sent successfully
        if ($status == Password::RESET_LINK_SENT) {
            // Return a success response with the token
            return response()->json(['message' => 'Email verification link sent', 'token' => $token], 200);
        } else {
            // Return an error response with a message
            return response()->json(['message' => 'Failed to send verification link'], 422);
        }
    }
    
 
 
}