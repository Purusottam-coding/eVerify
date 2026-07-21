<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Generic /dashboard entry point.
     * Redirects the logged-in user to their own role-specific dashboard.
     */
    public function index(): RedirectResponse
    {
        $user = auth()->user();

        return match ($user->role) {
            'superadmin' => redirect()->route('superadmin.dashboard'),
            'admin' => redirect()->route('admin.dashboard'),
            'staff' => redirect()->route('staff.dashboard'),
            default => redirect()->route('home'),
        };
    }

    /**
     * SuperAdmin dashboard — full overview, user management access.
     */
    public function superadmin(): View
    {
        $totalUsers = User::where('role', '!=', 'superadmin')->count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalStaff = User::where('role', 'staff')->count();

        return view('dashboard.superadmin', compact('totalUsers', 'totalAdmins', 'totalStaff'));
    }

    /**
     * Admin dashboard — document verification (built in next milestone).
     */
    public function admin(): View
    {
        return view('dashboard.admin');
    }

    /**
     * Staff dashboard — document upload (built in next milestone).
     */
    public function staff(): View
    {
        return view('dashboard.staff');
    }
}
