<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-pastel.css') }}">
    
    <style>
        :root {
            --admin-sidebar-width: 280px;
        }
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }
        .admin-sidebar {
            width: var(--admin-sidebar-width);
            background: #000000;
            color: #ffffff;
            padding: 4rem 2rem;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }
        .admin-main {
            flex: 1;
            margin-left: var(--admin-sidebar-width);
            background: #f5f5f5;
            padding: 4rem;
        }
        .admin-nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .admin-nav-item a {
            color: rgba(255,255,255,0.6);
            display: block;
            padding: 1rem 0;
            font-size: 1.4rem;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
        }
        .admin-nav-item a:hover, .admin-nav-item.active a {
            color: #ffffff;
        }
        .admin-card {
            background: #ffffff;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            margin-bottom: 3rem;
        }
        .admin-header {
            margin-bottom: 4rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }
        .admin-table th {
            text-align: left;
            font-family: var(--font-1);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.2rem;
            letter-spacing: 0.1rem;
            padding: 1.5rem;
            border-bottom: 2px solid #f0f0f0;
        }
        .admin-table td {
            padding: 1.5rem;
            border-bottom: 1px solid #f0f0f0;
            font-size: 1.5rem;
        }
        .admin-btn-sm {
            padding: 0.8rem 1.5rem !important;
            font-size: 1.1rem !important;
            height: auto !important;
            line-height: 1 !important;
        }
        .admin-sidebar-logo {
            margin-bottom: 6rem;
        }
        .admin-sidebar-logo img {
            width: 120px;
            filter: invert(1);
        }
    </style>
</head>

<body id="top" class="ss-bg-white">

    <div class="admin-wrapper">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-logo">
                <a href="{{ route('home') }}" style="font-family: var(--font-2); font-size: 2.2rem; color: #ffffff; text-decoration: none; font-weight: bold; display: block;">
                    Shiela Mae.
                </a>
            </div>
            <nav class="admin-nav">
                <ul class="admin-nav-list">
                    <li class="admin-nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="admin-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.index') }}">Settings</a>
                    </li>
                    <li class="admin-nav-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.services.index') }}">Services</a>
                    </li>
                    <li class="admin-nav-item {{ request()->routeIs('admin.clients.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.clients.index') }}">Clients</a>
                    </li>
                    <li class="admin-nav-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.testimonials.index') }}">Testimonials</a>
                    </li>
                    <li class="admin-nav-item {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.posts.index') }}">Blog Posts</a>
                    </li>
                    <li class="admin-nav-item {{ request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.contact-messages.index') }}">Messages</a>
                    </li>
                    <li class="admin-nav-item" style="margin-top: 4rem;">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" style="color: #ff4d4d;">Logout</a>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="admin-main">
            <header class="admin-header">
                <div>
                    <h2 class="u-remove-bottom">@yield('header_title', 'Admin Panel')</h2>
                    <p class="text-pretitle">Welcome, {{ Auth::user()->name }}</p>
                </div>
                <div>
                    @yield('header_actions')
                </div>
            </header>

            <div class="admin-content">
                @if(session('success'))
                    <div class="alert alert--success">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
