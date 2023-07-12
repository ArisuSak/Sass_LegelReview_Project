<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Auth\Events\PasswordReset;
use App\Models\PasswordReset;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use 

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

    
     public function store(Request $request)
     {
         // Validate the request data
         $request->validate([
             'token' => ['required'],
             'email' => ['required', 'email'],
             'password' => ['required', 'confirmed', Rules\Password::defaults()],
         ]);
     
         // Generate a hashed token
         $hashedToken = Hash::make($request->token);
     
         // Store the token in the password_resets table
         PasswordReset::create([
             'email' => $request->email,
             'token' => $hashedToken,
             'created_at' => now(),
         ]);
     
         // Attempt to reset the user's password
         $status = Password::reset(
             $request->only('email', 'password', 'password_confirmation', 'token'),
             function ($user, $password) {
                 // Update the user's password
                 $user->forceFill([
                     'password' => Hash::make($password),
                 ])->save();
             }
         );
     
         // Check if the password reset was successful
         if ($status == Password::PASSWORD_RESET) {
             // Return a JSON response with a success message
             return response()->json(['message' => 'Password reset successfully'], 200);
         } else {
             // Return a response with error messages
             return response()->json(['errors' => ['email' => __($status)]], 422);
         }
     }
     
     public function reset(Request $request, $token){
        // Delete Token older than 5 minutes
        $formatted = Carbon::now()->subMinutes(5)->toDateTimeString();
        PasswordReset::where('created_at', '<=', $formatted)->delete();

        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $passwordreset = PasswordReset::where('token', $token)->first();

        if(!$passwordreset){
            return response([
                'message'=>'Token is Invalid or Expired',
                'status'=>'failed'
            ], 404);
        }

        $user = User::where('email', $passwordreset->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete the token after resetting password
        PasswordReset::where('email', $user->email)->delete();

        return response([
            'message'=>'Password Reset Success',
            'status'=>'success'
        ], 200);
    }
}