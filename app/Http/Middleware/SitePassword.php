<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SitePassword
{
    /**
     * Handle an incoming request.
     * Shows a password gate for all site routes until the correct password
     * is entered. Authenticated state is stored in the session.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $password = config('app.site_password');

        // No password configured → let through (fail open so dev env isn't locked)
        if (empty($password)) {
            return $next($request);
        }

        // Already authenticated for this session
        if ($request->session()->get('site_authed') === true) {
            return $next($request);
        }

        // Handle password form submission
        if ($request->isMethod('POST') && $request->is('site-access')) {
            if ($request->input('password') === $password) {
                $request->session()->put('site_authed', true);
                $request->session()->regenerate();
                return redirect($request->input('intended', '/'));
            }
            return response(view('site-gate', ['error' => true, 'intended' => $request->input('intended', '/')]), 401);
        }

        // Not authenticated — show the gate
        return response(view('site-gate', [
            'error'   => false,
            'intended' => $request->fullUrl(),
        ]), 401);
    }
}
