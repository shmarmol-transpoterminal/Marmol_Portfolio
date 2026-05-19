@extends('layouts.frontend')

@section('title', 'Monica - Portfolio')

@section('content')

    <!-- intro
    ----------------------------------------------- -->
    <section id="intro" class="s-intro">

        <div class="row s-intro__content width-sixteen-col">

            <div class="column lg-12 s-intro__content-inner grid-block">
                
                <div class="s-intro__content-text">
                    <div class="s-intro__content-pretitle text-pretitle">{{ $settings['hero_pretitle'] ?? "Hello, I'm Monica" }}</div>
                    <h1 class="s-intro__content-title">
                    {!! nl2br(e($settings['hero_title'] ?? "I create marketing strategies for your business that get results.")) !!}
                    </h1>
                </div> <!-- s-intro__content-text -->

                <div class="s-intro__content-media">
                   <div class="s-intro__content-media-inner">
                       <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/626010574_2793697690962385_5789464887881614912_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGf_p8iSPHkSy3tdXu7ksE9w2Ky163TxofDYrLXrdPGh9YpOMKv1iHGz2GDcjtGqkGE7cR-YxlfJS2HruVzMhs6&_nc_ohc=eDDEQREx_HgQ7kNvwFkhkHm&_nc_oc=AdrZlZtCm1_oVH8HXCaC9fPYx6hfTSAWHZPmkW8rWLSXWtYQsXruEhVvd8_xAzpjAEY&_nc_zt=23&_nc_ht=scontent.fmnl3-2.fna&_nc_gid=e7OHUb-VjBySP1u4kpDniQ&_nc_ss=7b2a8&oh=00_Af5N42H_E_4NG9-taRioFUCBlO6hwips3RQaHA38M92ulA&oe=6A1207F0" alt="Shiela Mae">
                       <div class="lines">
                           <span></span>
                       </div>
                   </div>
                </div> <!-- s-intro__content-media -->
                <div class="s-intro__scroll-down">
                    <a href="#about" class="smoothscroll">
                        <div class="scroll-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                        </div>
                        <span>Scroll for more</span>
                    </a>
                </div> <!-- s-intro__scroll-down -->
                
            </div> <!-- s-intro__content-inner -->

        </div> <!-- s-intro__content -->

    </section> <!-- end s-intro -->

    <!-- about
    ----------------------------------------------- -->
    <section id="about" class="s-about target-section">

        <div class="row s-about__content width-sixteen-col">
            <div class="column grid-block grid-section-split">

                <img src="{{ asset('assets/images/geometric_shape.svg') }}" alt="" class="s-about__content-imgbg">

                <div class="section-header grid-section-split__header">
                    <div class="text-pretitle">About</div>                           
                    <h2 class="text-display-title">
                    {{ $settings['about_headline'] ?? 'An inspiring headline about yourself.' }}
                    </h2>                           
                </div> <!-- end section-header -->

                <div class="s-about__content-main grid-section-split__primary">
                    <p class="attention-getter">
                    {{ $settings['about_text_1'] ?? '' }}
                    </p>

                    <p class="attention-getter">
                    {{ $settings['about_text_2'] ?? '' }}
                    </p>
                </div> <!-- end s-about__content-main -->

                <div class="s-about__content-btn grid-section-split__bottom">
                    <a href="{{ route('about') }}" class="btn btn--stroke u-fullwidth">More About Me</a>

                    <ul class="s-about__social social-list">
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
                    </ul> <!-- end social-list -->
                </div> <!-- end s-about__content-btn -->
            
            </div> <!-- content-inner -->
        </div>
        
    </section> <!-- end s-about -->

    <!-- expertise
    ----------------------------------------------- -->
    <section id="expertise" class="s-expertise">

        <div class="row s-expertise__content width-sixteen-col">
            <div class="column xl-12 grid-block grid-section-split">

                <div class="section-header grid-section-split__header">
                    <div class="text-pretitle">Expertise</div>                           
                    <h2 class="text-display-title">
                    {{ $settings['expertise_title'] ?? 'My key areas of expertise.' }}
                    </h2>     
                    
                    <p class="lead">
                    {{ $settings['expertise_lead'] ?? '' }}
                    </p>
                </div> <!-- end section-header -->

                <div class="s-expertise__content-main grid-section-split__primary">

                    <div class="grid-list-items list-items show-ctr">
                        @foreach($services as $service)
                        <div class="grid-list-items__item list-items__item">
                            <div class="grid-list-items__title list-items__item-header">
                                <h3 class="list-items__item-title">{{ $service->title }}</h3>
                            </div>
                            <div class="grid-list-items__text list-items__item-text">
                                <p>
                                {{ $service->description }}
                                </p>
                            </div>
                        </div> <!-- list-item -->
                        @endforeach
                    </div> <!-- grid-list-items -->
                </div> <!-- end s-expertise__content-main -->

                <div class="s-expertise__content-btn grid-section-split__bottom">
                    <a href="{{ route('services') }}" class="btn btn--stroke u-fullwidth">View All Services</a>
                </div> <!-- end s-about__content-btn -->

            </div> <!-- end grid-block-->
        </div> <!-- end s-expertise__content -->

    </section> <!-- end s-expertise -->

    <!-- clients
    ----------------------------------------------- -->
    <section id="clients" class="s-clients">          

        <div class="row s-clients__content-block width-sixteen-col">
            <div class="column xl-12 grid-block grid-section-split">
            
                <div class="section-header grid-section-split__header">
                    <div class="text-pretitle">Clients</div>                           
                    <h2 class="text-display-title">
                    {{ $settings['clients_title'] ?? '' }}
                    </h2>       
                </div> <!-- end section-header -->
            
                <div class="grid-section-split__primary">
                    <p class="lead">
                    {{ $settings['clients_lead'] ?? '' }}
                    </p>   
                </div> <!-- end grid-section-split__primary -->
            
            </div> <!-- end column -->
        </div> <!-- end row -->

        <div class="row s-clients__content-block width-sixteen-col">
            <div class="column xl-12">
            
                <div class="clients-list">                            
                    @foreach($clients as $client)
                    <div class="clients-list__item">
                        <a href="#0">
                            <img src="{{ asset($client->logo) }}" alt="{{ $client->name }}">
                        </a>
                    </div>
                    @endforeach
                </div> <!-- end clients-list -->

            </div> <!-- end column -->
        </div> <!-- end row -->
                        
        <div class="row s-clients__content-block width-sixteen-col">
            <div class="column xl-12 testimonials">
            
                <div class="swiper-container testimonials__slider home-slider">

                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                        <div class="testimonials__slide swiper-slide">
                            <p>
                            {{ $testimonial->quote }}
                            </p>
                            <div class="testimonials__author">
                                <img src="{{ asset($testimonial->avatar) }}" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>{{ $testimonial->author }}</strong>
                                    <span>{{ $testimonial->company }}</span>
                                </cite>
                            </div>
                        </div>
                        @endforeach
                    </div> <!-- end swiper-wrapper --> 

                    <div class="swiper-pagination"></div>

                </div> <!--end testimonials__slider -->                    

            </div> <!-- end column -->
        </div> <!-- end row -->

    </section> <!-- end s-clients -->

@endsection
