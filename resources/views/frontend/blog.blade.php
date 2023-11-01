@extends('frontend.layout.app')

@section('content')
	
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg04.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>blog</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                            <div class="col-lg-12">
                                <div class="row">
                                    @foreach ($blogs as $blog)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-post-item mb-30">
                                            <div class="blog-post-thumb position-relative">
                                                <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a>
                                                <a href="{{ route('our.blog.details', $blog->slug) }}" class="blog-post-tag"></a>
                                            </div>
                                            <div class="blog-post-content">
                                                <div class="blog-post-meta">
                                                    <ul>
                                                        @if ($blog->rel_to_user->id != null)
                                                        <li><i class="far fa-user"></i><a >{{ $blog->rel_to_user->name }}</a></li>
                                                        @endif
                                                        <li><i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('d,M,Y') }}</li>
                                                    </ul>
                                                </div>
                                                <h4><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                                <a href="{{ route('our.blog.details', $blog->slug) }}" class="arrow-btn">Read More <span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

@endsection