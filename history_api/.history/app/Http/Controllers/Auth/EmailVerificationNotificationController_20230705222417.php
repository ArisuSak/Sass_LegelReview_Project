<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $user = $request->user();
    
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated'],200);
        }
    
        if ($user->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email already verified'], );
        }
    
        // Send the email verification notification
        $user->sendEmailVerificationNotification();
    
        return response()->json(['message' => 'Email verification link sent']);
    }

}