@extends('layouts.guest')

@section('title', 'पासवर्ड पुष्टि गर्नुहोस् | ई-भेरिफाइ')

@section('content')

    <h4>पासवर्ड पुष्टि गर्नुहोस्</h4>
    <p class="auth-subtitle">यो एक सुरक्षित क्षेत्र हो। अगाडि बढ्नु अघि कृपया आफ्नो पासवर्ड पुष्टि गर्नुहोस्।</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-3">
            <label for="password" class="form-label">पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="*****" required autofocus autocomplete="current-password">
        </div>

        <button type="submit" class="btn btn-gov-primary w-100">
            <i class="bi bi-shield-lock"></i> पुष्टि गर्नुहोस्
        </button>
    </form>

@endsection
