@extends('frontend.layout.app')

@section('content')
	
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg04.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Media</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">media</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- blog-area -->
            <section class="inner-blog-area" data-background="{{ asset('frontend') }}/img/bg/blog_bg02.jpg">
                <div class="container">
                    <div class="blog-inner-wrap">
                        <div class="row">
                            @foreach ($medias as $media)
                            <div class="col-lg-4">
                                    <div class="blog-post mb-60">
                                        <div class="blog-post-thumb position-relative mb-35">
                                            <a href="blog-details.html"><img src="{{ asset('uploads/media') }}/{{ $media->image }}" alt=""></a>
                                            <span class="blog-post-date">{{ $media->created_at->format('d,M,Y') }}</span>
                                        </div>
                                        <div class="blog-post-content">
                                            <h4><a href="blog-details.html">{{ $media->title }}</a></h4>
                                            <div class="blog-post-meta">
                                                <ul>
                                                    <li><i class="far fa-user"></i>By <a>{{ $media->rel_to_user->name }}</a></li>
                                                    <li><i class="far fa-comments"></i>Comment</li>
                                                </ul>
                                            </div>
                                            <p>{{ $media->sort_desp }}</p>
                                            <div class="blog-post-bottom">
                                                <a href="#">Read More <span>+</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

@endsection