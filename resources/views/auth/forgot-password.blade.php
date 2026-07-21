@extends('layouts.guest')

@section('title', 'पासवर्ड बिर्सनुभयो | ई-भेरिफाइ')

@section('content')

    <h4>पासवर्ड बिर्सनुभयो?</h4>
    <p class="auth-subtitle">कुनै समस्या छैन। आफ्नो इमेल ठेगाना दिनुहोस्, हामी पासवर्ड रिसेट लिङ्क पठाउनेछौं।</p>

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

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   class="form-control" placeholder="example@email.com" required autofocus>
        </div>

        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-envelope-arrow-up"></i> रिसेट लिङ्क पठाउनुहोस्
        </button>

        <div class="auth-links text-center">
            <a href="{{ route('login') }}">लगइन पृष्ठमा फर्कनुहोस्</a>
        </div>
    </form>

@endsection
