<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\validationException;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.loginpage');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
{
    $credentials = $request->validated();

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->active) {
            // User is not banned
            if (Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('super_admin'))) {
                // User has the admin or super_admin role
                $request->session()->regenerate();
                return redirect()->intended(RouteServiceProvider::HOME);
            } else {
                // User does not have the admin or super_admin role
                Auth::logout();
                return redirect()->route('login')->with('access_error', 'You have no access.');
            }
        } else {
            // User is banned
            Auth::logout();
            throw ValidationException::withMessages([
                'email' => 'Your account has been banned.',
            ]);
        }
    }

    // Authentication failed
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
