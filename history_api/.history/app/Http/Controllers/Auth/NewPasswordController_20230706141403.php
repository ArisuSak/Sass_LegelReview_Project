<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;


class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $errors = $request->session()->get('errors', new ViewErrorBag);
    
        return response()->json([
            'view' => 'auth.reset-password',
            'errors' => $errors,
            'request' => $request->all(),
        ]);
    }


    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

     use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;

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