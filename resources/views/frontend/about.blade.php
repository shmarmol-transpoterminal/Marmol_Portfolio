@extends('layouts.frontend')

@section('title', 'About - Shiela Mae')

@section('body_class', 'ss-about')

@section('content')

   <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">About</span>
                    {{ $settings['about_page_title'] ?? "Hi, I'm Shiela Mae" }}
                </h1>
                
            </div>
        </div>
   </section> <!-- end pageheader --> 

   <section class="s-pagecontent pagecontent">

        <div class="row pageintro">
            <div class="column xl-6 lg-12">
                <h2 class="text-display-title">{{ $settings['about_page_intro_title'] ?? 'Bridging the gap between static design and interactive reality.' }}</h2>
            </div>
            <div class="column xl-6 lg-12 u-flexitem-x-right">
                <p class="lead">
                {{ $settings['about_page_intro_text'] ?? 'I am Shiela Mae, a specialist in high-fidelity prototyping and user-centric design. I transform complex visions into interactive digital experiences that help stakeholders and developers align perfectly before a single line of code is written.' }}
                </p>

                <div class="about-skills u-add-bottom">
                    <h6 class="text-pretitle" style="margin-bottom: 1.2rem;">Skills</h6>
                    <div class="skills-list" style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Protopie</span>
                        <span class="skill-tag">Adobe XD</span>
                        <span class="skill-tag">Micro-interactions</span>
                        <span class="skill-tag">User Research</span>
                    </div>
                </div>
            </div>                       
        </div> <!-- end pageintro -->   
        
        <div class="row pagemedia">
            <div class="column xl-12">
                <figure class="page-media">                                
                    <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/626010574_2793697690962385_5789464887881614912_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGf_p8iSPHkSy3tdXu7ksE9w2Ky163TxofDYrLXrdPGh9YpOMKv1iHGz2GDcjtGqkGE7cR-YxlfJS2HruVzMhs6&_nc_ohc=eDDEQREx_HgQ7kNvwFkhkHm&_nc_oc=AdrZlZtCm1_oVH8HXCaC9fPYx6hfTSAWHZPmkW8rWLSXWtYQsXruEhVvd8_xAzpjAEY&_nc_zt=23&_nc_ht=scontent.fmnl3-2.fna&_nc_gid=e7OHUb-VjBySP1u4kpDniQ&_nc_ss=7b2a8&oh=00_Af5N42H_E_4NG9-taRioFUCBlO6hwips3RQaHA38M92ulA&oe=6A1207F0" alt="Shiela Mae">
                </figure>
            </div>
        </div> <!-- end pagemedia -->

        <div class="row width-narrower pagemain">
            <div class="column xl-12"> 

                <h2>Role & Expertise</h2>
                <p>
                As a Senior UI Prototype Designer, I bridge the critical gap between design conceptualization and technical implementation. My process involves deep user research combined with high-fidelity interaction design to ensure that every pixel and motion serves a purpose.
                </p>

                <h2 class="u-add-bottom">My Design Values</h2>

                <div class="grid-list-items list-items">
                    <div class="grid-list-items__item list-items__item u-remove-bottom">
                        <div class="list-items__item-header">
                            <h6 class="list-items__item-small-title">Precision</h6>
                        </div>
                        <p>
                        High-fidelity means every interaction must be precise. I ensure that prototypes look and feel exactly like the final product.
                        </p>
                    </div>
                    <div class="grid-list-items__item list-items__item u-remove-bottom">
                        <div class="list-items__item-header">
                            <h6 class="list-items__item-small-title">User-Centric</h6>
                        </div>
                        <p> 
                        Design is nothing without the user. Every prototype I build is tested and refined based on real human interactions.
                        </p>
                    </div>
                </div> <!--grid-list-items -->

            </div> <!-- end column -->
        </div> <!-- end pagemain -->

   </section> <!-- pagecontent -->

   @include('frontend.partials.testimonials')

   @include('frontend.partials.cta')

@endsection
