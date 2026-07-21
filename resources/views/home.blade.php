@extends('layouts.app')

@section('title', 'ई-भेरिफाइ | सरकारी कागजात प्रमाणीकरण प्रणाली')

@section('content')

    <!-- ===== HERO SECTION ===== -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mb-3">सरकारी कागजात प्रमाणीकरण प्रणाली</h1>
                    <p class="lead mb-4">QR Code मार्फत सरकारी तथा संस्थागत कागजातहरूको सुरक्षित प्रमाणीकरण तथा सत्यापन।</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-light px-4">
                            <i class="bi bi-qr-code-scan"></i> प्रमाणीकरण गर्नुहोस्
                        </a>
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-light px-4">
                                <i class="bi bi-speedometer2"></i> ड्यासबोर्ड
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light px-4">
                                <i class="bi bi-box-arrow-in-right"></i> लगइन गर्नुहोस्
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FEATURES SECTION ===== -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">प्रमुख विशेषताहरू</h2>
                <p class="section-subtitle">हाम्रो प्रणालीले प्रदान गर्ने मुख्य सेवाहरू</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-folder2-open"></i></div>
                        <h5 class="fw-bold mb-2">कागजात व्यवस्थापन</h5>
                        <p class="text-muted mb-0">सरकारी तथा संस्थागत कागजातहरूको सजिलो र व्यवस्थित डिजिटल व्यवस्थापन।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-qr-code"></i></div>
                        <h5 class="fw-bold mb-2">QR Code प्रमाणीकरण</h5>
                        <p class="text-muted mb-0">प्रत्येक कागजातमा अद्वितीय QR Code मार्फत तत्काल प्रमाणीकरण सुविधा।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-search"></i></div>
                        <h5 class="fw-bold mb-2">अनलाइन सत्यापन</h5>
                        <p class="text-muted mb-0">जुनसुकै समय, जुनसुकै स्थानबाट कागजातको प्रामाणिकता तुरुन्त जाँच गर्ने सुविधा।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-shield-lock"></i></div>
                        <h5 class="fw-bold mb-2">सुरक्षित अभिलेख</h5>
                        <p class="text-muted mb-0">सम्पूर्ण डाटा उच्च सुरक्षा मापदण्ड अनुसार सुरक्षित रूपमा भण्डारण।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== HOW IT WORKS SECTION ===== -->
    <section class="process-section" id="process">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">कसरी काम गर्छ?</h2>
                <p class="section-subtitle">चार सरल चरणमा कागजात प्रमाणीकरण प्रक्रिया</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">१</div>
                        <h6 class="fw-bold">कागजात जारी गर्नुहोस्</h6>
                        <p class="text-muted small">सम्बन्धित कार्यालयबाट आधिकारिक कागजात जारी गरिन्छ।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">२</div>
                        <h6 class="fw-bold">QR Code सिर्जना गर्नुहोस्</h6>
                        <p class="text-muted small">प्रत्येक कागजातको लागि अद्वितीय QR Code स्वतः सिर्जना हुन्छ।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">३</div>
                        <h6 class="fw-bold">कागजात वितरण गर्नुहोस्</h6>
                        <p class="text-muted small">QR Code सहितको कागजात सम्बन्धित व्यक्ति वा संस्थालाई वितरण गरिन्छ।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">४</div>
                        <h6 class="fw-bold">अनलाइन प्रमाणीकरण गर्नुहोस्</h6>
                        <p class="text-muted small">QR Code स्क्यान गरेर जुनसुकै बेला कागजातको वैधता जाँच गर्न सकिन्छ।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== STATISTICS SECTION ===== -->
    <section class="stats-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">हाम्रा उपलब्धिहरू</h2>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-number">५०००+</div>
                    <div class="stat-label">जारी कागजात</div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-number">२०००+</div>
                    <div class="stat-label">सफल प्रमाणीकरण</div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-number">१००+</div>
                    <div class="stat-label">कार्यालय</div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-number">९९.९%</div>
                    <div class="stat-label">विश्वसनीयता</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="cta-section">
        <div class="container">
            <h2 class="mb-3">डिजिटल प्रमाणीकरणतर्फ आजै कदम चाल्नुहोस्</h2>
            <p class="text-muted mb-4">सरकारी कागजात प्रमाणीकरण प्रणालीमा पहुँचका लागि आफ्नो कार्यालय खातामा लगइन गर्नुहोस्।</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-gov-primary px-4">
                        <i class="bi bi-speedometer2"></i> ड्यासबोर्ड जानुहोस्
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-gov-primary px-4">
                        <i class="bi bi-box-arrow-in-right"></i> लगइन गर्नुहोस्
                    </a>
                @endauth
            </div>
        </div>
    </section>

@endsection
