<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth\DB;
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
    
   

    use Illuminate\Support\Facades\Password;

public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'email' => ['required', 'email'],
    ]);

    // Generate a reset token
    $token = Str::random(60);

    // Store the reset token in the password_resets table
    $response = Password::broker()->sendResetLink(
        $request->only('email')
    );

    // Check if the password reset link was sent successfully
    if ($response == Password::RESET_LINK_SENT) {
        // Retrieve the reset token from the password_resets table
        $resetToken = DB::table('password_resets')
            ->where('email', $request->email)
            ->latest()
            ->first();

        // Return a success response with the reset token
        return response()->json(['message' => 'Email verification link sent', 'token' => $resetToken->token], 200);
    } else {
        // Return an error response with a message
        return response()->json(['message' => 'Failed to send verification link'], 422);
    }
}

    
    
    
}
