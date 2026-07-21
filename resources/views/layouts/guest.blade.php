<!DOCTYPE html>
<html lang="ne">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ई-भेरिफाइ | प्रमाणीकरण')</title>

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
        }

        * {
            font-family: 'Noto Sans Devanagari', sans-serif;
        }

        body {
            background-color: var(--gov-gray);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 460px;
        }

        .auth-brand {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--gov-blue-dark);
        }

        .auth-card {
            background: #ffffff;
            border: 1px solid #e2e4e7;
            border-radius: 6px;
            padding: 35px 32px;
            box-shadow: 0 1px 6px rgba(0,0,0,0.06);
        }

        .auth-card h4 {
            font-weight: 700;
            color: var(--gov-blue-dark);
            margin-bottom: 5px;
        }

        .auth-card .auth-subtitle {
            color: #6c757d;
            margin-bottom: 25px;
            font-size: 0.92rem;
        }

        .form-label {
            font-weight: 600;
            color: #1c1c1c;
        }

        .form-control:focus {
            border-color: var(--gov-blue);
            box-shadow: 0 0 0 0.2rem rgba(11, 61, 145, 0.15);
        }

        .btn-gov-primary {
            background-color: var(--gov-blue);
            border-color: var(--gov-blue);
            color: #ffffff;
            font-weight: 600;
            padding: 10px;
        }

        .btn-gov-primary:hover {
            background-color: var(--gov-blue-dark);
            border-color: var(--gov-blue-dark);
            color: #ffffff;
        }

        .auth-links a {
            color: var(--gov-blue);
            text-decoration: none;
            font-weight: 500;
        }

        .auth-links a:hover {
            text-decoration: underline;
        }

        .status-alert {
            background-color: #d1e7dd;
            color: #0f5132;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .back-home {
            display: block;
            text-align: center;
            margin-top: 18px;
        }

        .back-home a {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .back-home a:hover {
            color: #ffffff;
            text-decoration: underline;
        }
    </style>

    @yield('styles')
</head>
<body>

    <div class="auth-wrapper">
        <div class="auth-brand">
            <i class="bi bi-patch-check-fill"></i> ई-भेरिफाइ
        </div>

        <div class="auth-card">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
