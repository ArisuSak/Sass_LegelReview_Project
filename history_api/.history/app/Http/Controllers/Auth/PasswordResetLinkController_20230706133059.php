<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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
    $request->validate([
        'email' => ['required', 'email'],
    ]);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    $token = null;

    if ($status == Password::RESET_LINK_SENT) {
        // Retrieve the reset token from the password broker
        $token = $this->getResetToken($request->input('email'));
    }

    return response()->json([
        'message' => $status == Password::RESET_LINK_SENT ? 'Email verification link sent' : 'Failed to send verification link',
        'token' => $token,
    ], $status == Password::RESET_LINK_SENT ? 200 : 422);
}

/**
 * Retrieve the reset token for the given email address.
 *
 * @param string $email
 * @return string|null
 */
private function getResetToken($email)
{
    // Retrieve the reset token from the password broker
    $broker = Password::broker();
    $response = $broker->sendResetLink(['email' => $email]);
    $response = json_decode($response->getContent(), true);
    return $response['token'] ?? null;
}

    
}
