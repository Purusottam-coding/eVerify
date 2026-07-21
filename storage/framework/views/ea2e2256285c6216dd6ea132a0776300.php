<!DOCTYPE html>
<html lang="ne">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'ई-भेरिफाइ | सरकारी कागजात प्रमाणीकरण प्रणाली'); ?></title>
    <meta name="description" content="ई-भेरिफाइ - QR Code मार्फत सरकारी तथा संस्थागत कागजातहरूको सुरक्षित प्रमाणीकरण तथा सत्यापन प्रणाली।">

    <!-- Google Font: Noto Sans Devanagari -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        :root {
            --gov-blue: #333333;
            --gov-blue-dark: #1f1f1f;
            --gov-blue-light: #eceef0;
            --gov-gray: #f2f3f4;
            --gov-red: #dc3545;
        }

        * {
            font-family: 'Noto Sans Devanagari', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: #1c1c1c;
        }

        /* ===== TOP BAR ===== */
        .top-bar {
            background-color: var(--gov-blue-dark);
            color: #ffffff;
            font-size: 0.85rem;
            padding: 6px 0;
        }

        .top-bar a {
            color: #ffffff;
            text-decoration: none;
        }

        .top-bar a:hover {
            text-decoration: underline;
        }

        /* ===== NAVBAR ===== */
        .navbar-gov {
            background-color: #ffffff;
            border-bottom: 3px solid var(--gov-blue);
            padding: 14px 0;
        }

        .navbar-gov .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            color: var(--gov-blue) !important;
        }

        .navbar-gov .nav-link {
            font-weight: 500;
            color: #1c1c1c !important;
            margin: 0 10px;
        }

        .navbar-gov .nav-link:hover {
            color: var(--gov-blue) !important;
        }

        .btn-gov-primary {
            background-color: var(--gov-blue);
            border-color: var(--gov-blue);
            color: #ffffff;
            font-weight: 600;
        }

        .btn-gov-primary:hover {
            background-color: var(--gov-blue-dark);
            border-color: var(--gov-blue-dark);
            color: #ffffff;
        }

        .btn-gov-outline {
            border: 2px solid var(--gov-blue);
            color: var(--gov-blue);
            font-weight: 600;
            background-color: transparent;
        }

        .btn-gov-outline:hover {
            background-color: var(--gov-blue);
            color: #ffffff;
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            background-color: var(--gov-blue-dark);
            color: #ffffff;
            padding: 70px 0;
            border-bottom: 4px solid var(--gov-blue);
        }

        .hero-section h1 {
            font-weight: 700;
            font-size: 2.2rem;
        }

        .hero-section p.lead {
            font-size: 1.05rem;
            color: #d5d5d5;
        }

        /* ===== FEATURES SECTION ===== */
        .features-section {
            background-color: #ffffff;
            padding: 70px 0;
        }

        .feature-card {
            background: var(--gov-gray);
            border-radius: 4px;
            padding: 30px 22px;
            height: 100%;
            border: 1px solid #e2e4e7;
        }

        .feature-card:hover {
            border-color: var(--gov-blue);
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            background-color: #ffffff;
            color: var(--gov-blue);
            border: 1px solid var(--gov-blue-light);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 16px;
        }

        /* ===== HOW IT WORKS SECTION ===== */
        .process-section {
            padding: 70px 0;
            background-color: var(--gov-gray);
        }

        .process-step {
            text-align: center;
            padding: 15px;
        }

        .process-number {
            width: 42px;
            height: 42px;
            background-color: #ffffff;
            border: 2px solid var(--gov-blue);
            color: var(--gov-blue);
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px auto;
        }

        /* ===== STATISTICS SECTION ===== */
        .stats-section {
            background-color: var(--gov-blue-dark);
            color: #ffffff;
            padding: 60px 0;
        }

        .stat-number {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
        }

        .stat-label {
            font-size: 1rem;
            color: #d5d5d5;
        }

        /* ===== CTA SECTION ===== */
        .cta-section {
            background-color: #ffffff;
            padding: 55px 0;
            text-align: center;
            border-top: 1px solid #dde2e8;
        }

        .cta-section h2 {
            font-weight: 700;
            color: var(--gov-blue-dark);
            font-size: 1.6rem;
        }

        /* ===== FOOTER ===== */
        .footer-gov {
            background-color: #111111;
            color: #cfd0d2;
            padding: 50px 0 20px 0;
        }

        .footer-gov h5 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .footer-gov a {
            color: #cfd0d2;
            text-decoration: none;
        }

        .footer-gov a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 30px;
            padding-top: 18px;
            font-size: 0.85rem;
            text-align: center;
            color: #999999;
        }

        section .section-title {
            font-weight: 700;
            color: var(--gov-blue-dark);
        }

        section .section-subtitle {
            color: #5a5a5a;
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

    <!-- ===== TOP BAR ===== -->
    <div class="top-bar">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex gap-3 flex-wrap">
                <span><i class="bi bi-telephone-fill"></i> <a href="tel:+97715551234">+९७७-१-५५५१२३४</a></span>
                <span><i class="bi bi-envelope-fill"></i> <a href="mailto:info@everify.gov.np">info@everify.gov.np</a></span>
            </div>
            <div>
                <i class="bi bi-clock-fill"></i> कार्यालय समय: आइतबार - शुक्रबार, बिहान १०:०० - बेलुका ५:००
            </div>
        </div>
    </div>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-gov sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo e(route('home')); ?>">
                <i class="bi bi-patch-check-fill"></i> बाह्रदशी गाउँपालिका ई-भेरिफाइ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">गृहपृष्ठ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">विशेषताहरू</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">प्रक्रिया</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">सम्पर्क</a></li>
                </ul>
                <div class="d-flex gap-2 align-items-center">
                    <?php if(auth()->guard()->check()): ?>
                        <span class="badge bg-secondary"><?php echo e(auth()->user()->roleLabel()); ?></span>
                        <?php if(auth()->user()->isSuperAdmin()): ?>
                            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-gov-outline btn-sm px-3">
                                <i class="bi bi-person-plus"></i> प्रयोगकर्ता थप्नुहोस्
                            </a>
                        <?php endif; ?>
                        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-gov-outline btn-sm px-3">
                            <i class="bi bi-speedometer2"></i> ड्यासबोर्ड
                        </a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="m-0">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-gov-primary btn-sm px-3">
                                <i class="bi bi-box-arrow-right"></i> लगआउट
                            </button>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-gov-primary btn-sm px-3">लगइन</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="footer-gov" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><i class="bi bi-patch-check-fill"></i>बाह्रदशी गाउँपालिका ई-भेरिफाइ</h5>
                    <p>सरकारी तथा संस्थागत कागजातहरूको सुरक्षित अनलाइन प्रमाणीकरण प्रणाली। नक्कली कागजात रोकथाम र डिजिटल अभिलेख व्यवस्थापनको लागि विश्वसनीय प्लेटफर्म।</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home">गृहपृष्ठ</a></li>
                        <li class="mb-2"><a href="#features">विशेषताहरू</a></li>
                        <li class="mb-2"><a href="#process">प्रक्रिया</a></li>
                        <li class="mb-2"><a href="#contact">सम्पर्क</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>सम्पर्क</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill"></i> काठमाडौं, नेपाल</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill"></i> +९७७-१-५५५१२३४</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill"></i> info@everify.gov.np</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>ठेगाना</h5>
                    <p>सिंहदरबार, काठमाडौं<br>बागमती प्रदेश, नेपाल<br>पत्र संकेत नं: ४४६००</p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo e(date('Y')); ?> ई-भेरिफाइ। सर्वाधिकार सुरक्षित। | Government Document Verification System
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\Laravel\everify\resources\views/layouts/app.blade.php ENDPATH**/ ?>