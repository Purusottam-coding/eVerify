<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(): RedirectResponse
    {
        return redirect()->route('dashboard');
    }

    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();

        if ($user) {
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);

            $user->fill($validated);
            $user->save();
        }

        return redirect()->route('dashboard');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $user = $request->user();

        if ($user) {
            auth()->logout();

            $user->delete();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect()->route('home');
    }
}