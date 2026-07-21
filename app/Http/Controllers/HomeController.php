<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * Root URL ("/") no longer shows a public landing page.
     * - Guest  -> sent straight to the login page.
     * - Logged in -> sent to their role-specific dashboard
     *               (via the "dashboard" route, which redirects
     *                to superadmin/admin/staff dashboard).
     */
    public function index(): RedirectResponse
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }
}
