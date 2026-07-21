@extends('layouts.app')

@section('title', 'कर्मचारी ड्यासबोर्ड | ई-भेरिफाइ')

@section('content')

    <section class="py-5" style="background-color: var(--gov-gray); min-height: 70vh;">
        <div class="container">

            <div class="mb-4">
                <h2 class="fw-bold mb-1" style="color: var(--gov-blue-dark);">कर्मचारी ड्यासबोर्ड</h2>
                <p class="text-muted mb-0">स्वागत छ, {{ auth()->user()->name }}!</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-cloud-upload"></i></div>
                <h5 class="fw-bold mb-2">कागजात अपलोड गर्नुहोस्</h5>
                <p class="text-muted mb-0">नयाँ कागजात upload गर्ने सुविधा </p>
            </div>

        </div>
    </section>

@endsection
