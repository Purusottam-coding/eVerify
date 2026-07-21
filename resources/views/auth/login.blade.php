@extends('layouts.guest')

@section('title', 'लगइन | बाह्रदशी गाउँपालिका ')

@section('content')

    <h4>लगइन गर्नुहोस्</h4>
    <p class="auth-subtitle">आफ्नो खातामा पहुँच गर्न विवरण भर्नुहोस्</p>

    @if (session('status'))
        <div class="status-alert">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   class="form-control" placeholder="example@email.com" required autofocus autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="*****" required autocomplete="current-password">
        </div>

        <!-- Remember Me -->
        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
            <label for="remember" class="form-check-label">मलाई सम्झनुहोस्</label>
        </div>

        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-box-arrow-in-right"></i> लगइन गर्नुहोस्
        </button>

        <div class="auth-links text-center">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">पासवर्ड बिर्सनुभयो?</a>
            @endif
        </div>
    </form>

@endsection
