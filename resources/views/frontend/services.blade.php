@extends('layouts.frontend')

@section('title', 'Services - Monica')

@section('body_class', 'ss-services')

@section('content')

   <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Services</span>
                    {{ $settings['services_page_title'] ?? 'High-Impact Services' }}
                </h1>
                
            </div>
        </div>
   </section> <!-- pageheader -->  

   <section class="s-pagecontent pagecontent">

        <div class="row pageintro">
            <div class="column xl-6 lg-12">
                <h2 class="text-display-title">{{ $settings['services_page_intro_title'] ?? 'High-impact services to help your business' }}</h2>
            </div>
            <div class="column xl-6 lg-12 u-flexitem-x-right">
                <p class="lead">
                {{ $settings['services_page_intro_text'] ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint nostrum fugit aperiam inventore optio itaque molestias corporis.' }}
                </p>
            </div>                       
        </div>  <!-- pageintro -->       

        <div class="row">
            <div class="column xl-12 grid-block">             
                
                <div class="grid-full grid-list-items list-items show-ctr">
                    
                    @foreach($services as $service)
                    <div class="grid-list-items__item list-items__item">
                        <div class="list-items__item-header">
                            <h3 class="list-items__item-title">{{ $service->title }}</h3>
                        </div>
                        <div class="list-items__item-text">
                            <p>
                            {{ $service->description }}
                            </p>
                        </div>
                    </div> <!-- end list-items__item -->
                    @endforeach

                </div> <!-- grid-list-items -->
               

            </div> <!-- end grid-block-->
        </div> <!-- end row -->

   </section> <!-- pagecontent -->

   @include('frontend.partials.testimonials')

   @include('frontend.partials.cta')

@endsection
