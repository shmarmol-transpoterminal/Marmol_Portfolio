<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-pastel.css') }}">
    
    <style>
        .admin-auth-container {
            max-width: 600px;
            margin: 10rem auto;
            padding: 4rem;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .admin-auth-logo {
            text-align: center;
            margin-bottom: 4rem;
        }
        .admin-auth-logo img {
            width: 150px;
        }
        .form-field input, .form-field textarea {
            border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
        }
        .form-field input:focus {
            border-bottom: 1px solid #000000 !important;
        }
        .error-message {
            color: #ff0000;
            font-size: 1.4rem;
            margin-top: 0.5rem;
        }
        .auth-links {
            margin-top: 2rem;
            text-align: center;
            font-size: 1.4rem;
        }
        .auth-links a {
            color: #777;
        }
        .auth-links a:hover {
            color: #000;
        }
    </style>
</head>

<body id="top" class="ss-bg-white">

    <div id="page" class="s-pagewrap">
        <main id="content" class="s-content">
            <div class="row">
                <div class="column xl-12">
                    <div class="admin-auth-container">
                        <div class="admin-auth-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="Homepage">
                            </a>
                        </div>
                        
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
