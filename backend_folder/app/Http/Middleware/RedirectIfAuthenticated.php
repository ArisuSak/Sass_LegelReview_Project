<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Set the guards array to contain at least null if no guards are provided
        $guards = empty($guards) ? [null] : $guards;
    
        // Iterate through each guard
        foreach ($guards as $guard) {
            // Check if the user is authenticated for the current guard
            if (Auth::guard($guard)->check()) {
                // Get the authenticated user
                $user = Auth::guard($guard)->user();
    
                // Check if the user has the 'super_admin' role
                if ($user->hasRole('super_admin')) {
                    // User has the 'super_admin' role, allow the request to proceed
                    return $next($request);
                }
    
                // User is authenticated but does not have the 'super_admin' role
                // Redirect to the default home route
                return redirect(RouteServiceProvider::HOME);
            }
        }
    
        // User is not authenticated, allow the request to proceed
        return $next($request);
    }

}
