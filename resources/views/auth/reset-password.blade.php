@extends('layouts.guest')

@section('title', 'पासवर्ड रिसेट गर्नुहोस् | ई-भेरिफाइ')

@section('content')

    <h4>नयाँ पासवर्ड सेट गर्नुहोस्</h4>
    <p class="auth-subtitle">आफ्नो खाताको लागि नयाँ पासवर्ड बनाउनुहोस्</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}"
                   class="form-control" required autofocus autocomplete="username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">नयाँ पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">पासवर्ड पुष्टि गर्नुहोस्</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-gov-primary w-100">
            <i class="bi bi-key-fill"></i> पासवर्ड रिसेट गर्नुहोस्
        </button>
    </form>

@endsection
