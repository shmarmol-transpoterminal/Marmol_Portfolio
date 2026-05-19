<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Shiela Mae')</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-pastel.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/site.webmanifest') }}">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap @yield('body_class', 'ss-home')">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="{{ route('home') }}" style="font-family: var(--font-2); font-size: 2.4rem; color: var(--color-2); text-decoration: none; font-weight: bold;">
                            Shiela Mae
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
                        <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                        <li class="{{ request()->routeIs('blog') ? 'current' : '' }}"><a href="{{ route('blog') }}">Journal</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <div class="s-header__contact">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn--stroke s-header__contact-btn">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn--stroke s-header__contact-btn">Login</a>
                        @endauth
                        <a href="{{ route('contact') }}" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            @yield('content')

        </section> <!-- end s-content -->


        <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">
                <div class="column lg-5 md-8 stack-on-900">
                    <div class="s-footer__logo">
                        <a class="logo" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="Homepage">
                        </a>
                    </div>
                    <p>
                    {{ $settings['footer_text'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' }}
                    </p>
                </div>
                <div class="column lg-2 md-4 stack-on-900 s-footer__social-block">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column lg-3 md-12 s-footer__contact-block">
                    <div class="s-footer__contact-info">
                        <p>
                        <a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? '' }}</a> <br>
                        <a href="tel:{{ $settings['contact_phone'] ?? '' }}">{{ $settings['contact_phone'] ?? '' }}</a>
                        </p>
                    </div>
                </div>
            </div> <!-- end s-footer__content -->

            <div class="row s-footer__bottom">
                <div class="column ss-copyright">
                    <span>© Copyright Shiela Mae {{ date('Y') }}</span> 
                    <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                </div>

                <div class="column ss-admin-link" style="text-align: right;">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn--stroke">Admin Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn--stroke">Admin Login</a>
                    @endauth
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"></path></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div> <!-- end s-footer__bottom -->

        </footer> <!-- end s-footer -->

    </div> <!-- end s-pagewrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
