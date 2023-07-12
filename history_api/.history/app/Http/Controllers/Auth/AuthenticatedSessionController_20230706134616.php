<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */

     public function create()
     {
        return response()->json([
            'message' => 'Authentication successful',
            // 'user' => Auth::user(),
        ], 200);
     }

     use Illuminate\Support\Facades\Auth;

     public function store(LoginRequest $request)
     {
         $credentials = $request->validated();
     
         if (Auth::attempt($credentials)) {
             $user = Auth::user();
             if ($user->active) {
                 // User is not banned
                 $token = $user->createToken('authToken')->plainTextToken;
                 return response()->json(['message' => 'Authentication successful', 'token' => $token], 200);
             } else {
                 // User is banned
                 Auth::logout();
                 return response()->json(['error' => 'Your account has been banned'], 401);
             }
         }
     
         // Authentication failed
         return response()->json(['error' => 'Invalid credentials'], 401);
     }
     
     

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
{
    Auth::guard('web')->logout();

    return response()->json(['message' => 'Logged out successfully'], 200);
}

}