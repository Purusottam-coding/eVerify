<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $user = $request->user();

        if (! $user || (string) $request->route('id') !== (string) $user->getKey()) {
            abort(403);
        }

        if (! hash_equals(sha1((string) $user->email), (string) $request->route('hash'))) {
            abort(403);
        }

        if (empty($user->email_verified_at)) {
            $user->forceFill([
                'email_verified_at' => now(),
            ])->save();
        }

        return redirect()->intended(route('dashboard'));
    }
}