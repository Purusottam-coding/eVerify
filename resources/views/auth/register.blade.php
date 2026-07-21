@extends('layouts.guest')

@section('title', 'दर्ता गर्नुहोस् | बाह्रदशी गाउँपालिका ')

@section('content')

    <h4>नयाँ खाता दर्ता गर्नुहोस्</h4>
    <p class="auth-subtitle">बाह्रदशी गाउँपालिकाको ई-भेरिफाइ प्रयोग गर्न आफ्नो विवरण भर्नुहोस्</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">पूरा नाम</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}"
                   class="form-control" placeholder="तपाईंको पूरा नाम" required autofocus autocomplete="name">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   class="form-control" placeholder="example@email.com" required autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">पासवर्ड पुष्टि गर्नुहोस्</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <!-- Role -->
        <div class="mb-3">
            <label for="role" class="form-label">भूमिका (Role)</label>
            <select id="role" name="role" class="form-select" required>
                <option value="" disabled {{ old('role') ? '' : 'selected' }}>भूमिका छान्नुहोस्</option>
                <option value="superadmin" {{ old('role') === 'superadmin' ? 'selected' : '' }}>सुपर एडमिन</option>
                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>एडमिन</option>
                <option value="staff" {{ old('role') === 'staff' ? 'selected' : '' }}>स्टाफ</option>
            </select>
        </div>

        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-person-plus-fill"></i> दर्ता गर्नुहोस्
        </button>

        <div class="auth-links text-center">
            पहिले नै खाता छ? <a href="{{ route('login') }}">लगइन गर्नुहोस्</a>
        </div>
    </form>

@endsection
