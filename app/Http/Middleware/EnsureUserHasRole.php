<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * Usage in routes: ->middleware('role:superadmin')
     *                  ->middleware('role:superadmin,admin')
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (! $user || ! in_array($user->role, $roles, true)) {
            abort(403, 'तपाईंलाई यो पृष्ठ हेर्ने अनुमति छैन। (Unauthorized access for your role.)');
        }

        return $next($request);
    }
}
