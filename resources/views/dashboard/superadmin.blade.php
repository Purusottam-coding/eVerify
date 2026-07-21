@extends('layouts.app')

@section('title', 'सुपर एडमिन ड्यासबोर्ड | ई-भेरिफाइ')

@section('content')

    <section class="py-5" style="background-color: var(--gov-gray); min-height: 70vh;">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                <div>
                    <h2 class="fw-bold mb-1" style="color: var(--gov-blue-dark);">सुपर एडमिन ड्यासबोर्ड</h2>
                    <p class="text-muted mb-0">स्वागत छ, {{ auth()->user()->name }}!</p>
                </div>
                <a href="{{ route('users.create') }}" class="btn btn-gov-primary">
                    <i class="bi bi-person-plus-fill"></i> नयाँ प्रयोगकर्ता थप्नुहोस्
                </a>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                        <h5 class="fw-bold mb-1">{{ $totalUsers }}</h5>
                        <p class="text-muted mb-0">कुल प्रयोगकर्ता (Admin + Staff)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-person-badge"></i></div>
                        <h5 class="fw-bold mb-1">{{ $totalAdmins }}</h5>
                        <p class="text-muted mb-0">एडमिन</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-person-workspace"></i></div>
                        <h5 class="fw-bold mb-1">{{ $totalStaff }}</h5>
                        <p class="text-muted mb-0">कर्मचारी</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <h5 class="fw-bold mb-2"><i class="bi bi-info-circle"></i> आगामी सुविधाहरू</h5>
                <p class="text-muted mb-0">Document approval, digital signature, र QR code features</p>
            </div>

        </div>
    </section>

@endsection
