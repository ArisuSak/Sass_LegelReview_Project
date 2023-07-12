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

    $response = $client->post('/api/forgot-password', [
        'json' => [
            'email' => $request->input('email'),
        ],
    ]);

    $data = json_decode($response->getBody(), true);
    $token = $data['token'];

    return $status == Password::RESET_LINK_SENT
        ? response()->json(['message' => 'Email verification link sent', 'token' => $token], 200)
        : response()->json(['message' => 'Failed to send verification link'], 422);
}
    
    
}
