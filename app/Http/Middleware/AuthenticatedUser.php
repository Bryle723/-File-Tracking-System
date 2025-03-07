<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AuthenticatedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to the login page or return an unauthorized response
            return redirect()->route('auth.loginForm');  // or return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        // Share the authenticated user with all views
        View::share('authUser', Auth::user());

        return $next($request);
    }
}
