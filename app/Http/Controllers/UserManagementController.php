<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserManagementController extends Controller
{
    /**
     * Show the form to create a new Admin or Staff account.
     * SuperAdmin ONLY. Public registration is disabled.
     */
    public function create(): View
    {
        $users = User::where('role', '!=', 'superadmin')
            ->latest()
            ->get();

        return view('superadmin.create-user', compact('users'));
    }

    /**
     * Store a newly created Admin or Staff account.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:admin,staff'],
        ], [
            'name.required' => 'नाम आवश्यक छ।',
            'email.required' => 'इमेल आवश्यक छ।',
            'email.unique' => 'यो इमेल पहिले नै दर्ता भइसकेको छ।',
            'password.required' => 'पासवर्ड आवश्यक छ।',
            'password.min' => 'पासवर्ड कम्तिमा ८ अक्षरको हुनुपर्छ।',
            'password.confirmed' => 'पासवर्ड र पुष्टिकरण पासवर्ड मिलेन।',
            'role.required' => 'भूमिका छान्नुहोस्।',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            // Created directly by SuperAdmin, so mark verified immediately.
            'email_verified_at' => now(),
        ]);

        return redirect()
            ->route('users.create')
            ->with('status', 'नयाँ प्रयोगकर्ता सफलतापूर्वक थपियो।');
    }

    /**
     * Remove a staff/admin account.
     */
    public function destroy(User $user): RedirectResponse
    {
        if ($user->isSuperAdmin()) {
            abort(403, 'SuperAdmin खाता हटाउन मिल्दैन।');
        }

        $user->delete();

        return redirect()
            ->route('users.create')
            ->with('status', 'प्रयोगकर्ता हटाइयो।');
    }
}
