<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        if ($request->user() && $request->user()->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email already verified']);
        } else {
            return response()->json(['message' => 'Email not verified'], 401);
        }
    }
}

