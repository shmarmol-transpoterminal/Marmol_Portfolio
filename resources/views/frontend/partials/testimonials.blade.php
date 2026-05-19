<section class="s-testimonials">

    <div class="s-testimonials__header row row-x-center text-center">
        <div class="column xl-8 lg-12">

            <p class="text-pretitle">
            Testimonials
            </p>
            <h3>
            Reviews From Real Clients
            </h3>                        

        </div>
    </div> <!--end s-testimonials__header -->

    <div class="row s-testimonials__content">
        <div class="column xl-12 testimonials">

            <div class="swiper-container testimonials__slider page-slider">

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

        </div> <!-- testimonials -->
    </div> <!--end s-testimonials__content -->

</section> <!-- end s-testimonials -->
