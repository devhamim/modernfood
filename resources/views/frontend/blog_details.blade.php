@extends('frontend.layout.app')

@section('content')

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg04.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>blog Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
                            <div class="col-lg-8">
                                <div class="blog-post blog-details-wrap mb-60">
                                    <div class="blog-post-thumb position-relative mb-35">
                                        <img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="">
                                        <span class="blog-post-date">{{ $blogs->first()->created_at->format('d-M-Y') }}</span>
                                    </div>
                                    <div class="blog-post-content blog-details-content">
                                        <h4>{{ $blogs->first()->title }}</h4>
                                        <div class="blog-post-meta">
                                            <ul>
                                                @if ($blogs->first()->added_by != null)
                                                    <li><a ><i class="fas fa-user-circle"></i>{{ $blogs->first()->rel_to_user->name }}</a> </li>
                                                @endif
                                                <li><i class="far fa-comments"></i>Comment</li>
                                            </ul>
                                        </div>
                                        <p>{!! $blogs->first()->description !!}</p>
                                        
                                    </div>
                                </div>

                                <div class="blog-comment-wrap mb-80">
                                    <div class="sidebar-title mb-50">
                                        <h3>Comments ({{ $blog_comment_count }})</h3>
                                    </div>
                                    <ul>
                                        @foreach ($blog_comment as $comment)
                                        <li>
                                            <div class="blog-comment-avatar">
                                                <img src="{{ asset('frontend') }}/img/blog/comment_avatar01.jpg" alt="">
                                            </div>
                                            <div class="blog-comment-content">
                                                <h5><a >{{ $comment->name }}</a><span>{{ $comment->created_at->format('d-M-Y') }}</span></h5>
                                                <p>{{$comment->message}}</p>
                                                
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="comment-reply-box">
                                    <div class="sidebar-title mb-40">
                                        <h3>Leave a Comment</h3>
                                    </div>
                                    <form name="contact_form" class="comment-form" action="{{ route('blog.comment') }}" method="POST">
                                        @csrf
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="name" type="text" placeholder="Your Name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="email" type="email" placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <input name="blogs_id" class="form-control" type="hidden" value="{{ $blogs->first()->id }}" />

                                        <button type="submit" class="btn gradient-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <aside class="blog-sidebar-wrap">
                                    
                                    <div class="widget mb-35">
                                        <div class="blog-sidebar-inner">
                                            <div class="sidebar-title mb-35">
                                                <h3>Recent Posts</h3>
                                            </div>
                                            <div class="rc-post">
                                                <ul>
                                                    @foreach ($latest_blogs->take(6) as $latest)
                                                    <li>
                                                        <div class="rc-post-thumb">
                                                            <a href="{{ route('our.blog.details', $latest->slug) }}"><img width="50px" src="{{ asset('uploads/blog') }}/{{ $latest->image }}" alt="img"></a>
                                                        </div>
                                                        <div class="rc-post-content">
                                                            <h5><a href="{{ route('our.blog.details', $latest->slug) }}">{{ $latest->title }}</a></h5>
                                                            <span>{{ $latest->created_at->format('d-M-Y') }}</span>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
@endsection