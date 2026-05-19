@extends('layouts.frontend')

@section('title', 'Blog - Monica')

@section('body_class', 'ss-blog')

@section('content')

   <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">My Blog</span>
                    Recent Writings
                </h1>
            </div>
        </div>
   </section>   

   <section class="s-pagecontent pagecontent">

        <div class="row">
            <div class="column xl-12 grid-block">          

                    <div class="grid-full grid-list-items">

                        @foreach($posts as $post)
                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="{{ route('blog') }}">{{ $post->category ?? 'General' }}</a>
                                </div>
                                <h3 class="blog-card__title"><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h3>
                            </div>
                            <div class="blog-card__text">
                                <p>
                                {{ Str::limit(strip_tags($post->content), 200) }}
                                </p>
                            </div>
                        </div> <!-- end blog-card -->
                        @endforeach

                    </div> <!-- grid-list-items -->

            </div> <!-- end grid-block-->
        </div> <!-- end row -->

        <!-- pagination -->
        <div class="row navigation pagination">
            <div class="column xl-12">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div> <!-- end column -->
        </div> <!-- end pagination -->

   </section>

   @include('frontend.partials.cta')

@endsection
