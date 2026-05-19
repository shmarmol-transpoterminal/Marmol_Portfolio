@extends('layouts.frontend')

@section('title', 'Contact - Monica')

@section('body_class', 'ss-contact')

@section('content')

   <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Contact</span>
                    Get In Touch
                </h1>                            
            </div>
        </div>
   </section> <!--pageheader -->  

   <section class="s-pagecontent pagecontent">

        <div class="row pageintro">
            <div class="column xl-6 lg-12">
                <h2 class="text-display-title">{{ $settings['contact_page_intro_title'] ?? "Let's take your business to the next level." }}</h2>
            </div>
            <div class="column xl-6 lg-12 u-flexitem-x-right">
               <p class="lead">
               {{ $settings['contact_page_intro_text'] ?? 'I am currently open to new projects, freelance collaborations, or full-time opportunities. If you have a vision you want to bring to life through interactive design, feel free to reach out!' }}
               </p>
            </div>
            </div> <!-- pageintro -->   

            <div class="row pagemedia">
            <div class="column xl-12">
               <figure class="page-media">                                
                   <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/626010574_2793697690962385_5789464887881614912_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGf_p8iSPHkSy3tdXu7ksE9w2Ky163TxofDYrLXrdPGh9YpOMKv1iHGz2GDcjtGqkGE7cR-YxlfJS2HruVzMhs6&_nc_ohc=eDDEQREx_HgQ7kNvwFkhkHm&_nc_oc=AdrZlZtCm1_oVH8HXCaC9fPYx6hfTSAWHZPmkW8rWLSXWtYQsXruEhVvd8_xAzpjAEY&_nc_zt=23&_nc_ht=scontent.fmnl3-2.fna&_nc_gid=e7OHUb-VjBySP1u4kpDniQ&_nc_ss=7b2a8&oh=00_Af5N42H_E_4NG9-taRioFUCBlO6hwips3RQaHA38M92ulA&oe=6A1207F0" alt="Shiela Mae">
               </figure>
            </div>
            </div> <!-- pagemedia --> 

            <div class="row width-narrower pagemain">
            <div class="column xl-12">
               <h2>Let's Work Together</h2>

               <div class="row">
                   <div class="column xl-6 md-12 contact-cta">     
                       <p>
                       {{ $settings['contact_cta_text'] ?? 'I am always looking for new challenges and exciting projects to collaborate on. Whether you are looking to build a high-fidelity prototype from scratch, or just want to chat about design technology, my inbox is always open.' }}
                       </p>
                        @if(session('success'))
                            <div style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="column xl-12">
                                    <label for="name">Name</label>
                                    <input class="u-fullwidth" type="text" placeholder="Your Name" id="name" name="name" required>
                                </div>
                                <div class="column xl-12">
                                    <label for="email">Email</label>
                                    <input class="u-fullwidth" type="email" placeholder="Your Email" id="email" name="email" required>
                                </div>
                                <div class="column xl-12">
                                    <label for="subject">Subject</label>
                                    <input class="u-fullwidth" type="text" placeholder="Subject" id="subject" name="subject">
                                </div>
                                <div class="column xl-12">
                                    <label for="message">Message</label>
                                    <textarea class="u-fullwidth" placeholder="Your Message" id="message" name="message" required></textarea>
                                </div>
                            </div>
                            <input class="btn btn--primary u-fullwidth" type="submit" value="Send Message">
                        </form>
                    </div> 
                    <div class="column xl-5 md-12 u-flexitem-x-right">

                        <div class="contact-block">
                            <h6>Follow On Social</h6>
                            <ul class="contact-social social-list">
                                <li>
                                    <a href="{{ $settings['facebook_url'] ?? '#0' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                        <span class="u-screen-reader-text">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings['twitter_url'] ?? '#0' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                        <span class="u-screen-reader-text">Twitter</span>
                                    </a>
                                </li>
                            </ul> <!-- end social-list -->
                        </div>

                        <div class="contact-block">
                            <h6>Email</h6>
                            <a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? '' }}</a>
                        </div>

                        <div class="contact-block">
                            <h6>Phone</h6>
                            <ul class="contact-list">
                                <li><a href="tel:{{ $settings['contact_phone'] ?? '' }}">{{ $settings['contact_phone'] ?? '' }}</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>                        
        </div> <!-- end pagemain -->

   </section> <!-- pagecontent -->

   @include('frontend.partials.testimonials')

@endsection
