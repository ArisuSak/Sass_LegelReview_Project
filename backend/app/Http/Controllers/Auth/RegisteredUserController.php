<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */


    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'], 
            // Validate the 'name' field
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            // Validate the 'email' field
            'password' => ['required', 'confirmed', Rules\Password::defaults()], 
            // Validate the 'password' field
        ]);
    
        $user = User::create([
            'name' => $request->name,
            // Create a new user with the provided name
            'email' => $request->email, 
            // Set the email for the new user
            'password' => Hash::make($request->password), 
            // Hash and set the password for the new user
        ]);
        $user->attachRole($request->role_id); 
        // Assign the selected role to the new user
        event(new Registered($user)); 
        // Trigger the Registered event
    
        // Auth::login($user); // (Optional) Automatically log in the new user
        return redirect(RouteServiceProvider::HOME); // Redirect to the designated home page
    }
    
}
