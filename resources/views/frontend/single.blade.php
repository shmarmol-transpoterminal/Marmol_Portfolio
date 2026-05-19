@extends('layouts.frontend')

@section('title', $post->title . ' - Monica')

@section('body_class', 'ss-blog')

@section('content')

    <article id="content" class="s-content entry">

        <div class="s-pageheader entry__header">
            <div class="row">
                <div class="column xl-12">

                    <h1 class="entry__title">
                        {{ $post->title }}
                    </h1> <!-- end entry__title -->

                    <div class="entry__meta">
                        <div class="entry__meta-date">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                            </svg>
                            {{ $post->created_at->format('F d, Y') }}
                        </div>
                        <div class="entry__meta-cat">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                            </svg>                                      
                            <span class="cat-links">
                                <a href="{{ route('blog') }}">{{ $post->category ?? 'General' }}</a>
                            </span>
                        </div>
                    </div> <!-- end entry__meta -->

                </div>
            </div>
        </div> <!-- end entry__header --> 

        <div class="s-pagecontent entry__content">

            @if($post->image)
            <div class="row entry__media">
                <div class="column xl-12">
                    <figure class="featured-image">
                        <img src="{{ asset($post->image) }}" alt="">
                    </figure>
                </div>
            </div> <!-- end entry__media -->
            @endif

            <div class="row entry__primary width-narrower">
                <div class="column xl-12"> 
                    {!! $post->content !!}
                </div> <!-- end column-->
            </div> <!-- end entry__primary -->    

        </div> <!-- end entry__content -->

    </article> <!-- s-content entry-->

@endsection
