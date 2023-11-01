@extends('frontend.layout.app')

@section('content')

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg04.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Media Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Media Details</li>
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
                                        <img src="{{ asset('frontend') }}/img/blog/blog_thumb01.jpg" alt="">
                                        <span class="blog-post-date">June 09, 2020</span>
                                    </div>
                                    <div class="blog-post-content blog-details-content">
                                        <h4>Farming Has A Banking Problem Crop</h4>
                                        <div class="blog-post-meta">
                                            <ul>
                                                <li><i class="far fa-user"></i>By <a href="#">Tomas Alexa</a></li>
                                                <li><i class="far fa-comments"></i>Comment</li>
                                                <li><i class="fas fa-tags"></i><a href="#">Health,</a> <a href="#">Agriculture</a></li>
                                            </ul>
                                        </div>
                                        <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue
                                        ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset
                                        sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p>
                                        <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor
                                        tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum
                                        Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                                        <blockquote>
                                            Agriculture is the science and art of cultivating plants and livestock. Agriculture was the key development in the rise
                                            of sedentary human.
                                        </blockquote>
                                        <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor
                                        tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum
                                        Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                                        <div class="blog-details-img">
                                            <img src="{{ asset('frontend') }}/img/blog/blog_details_img01.jpg" alt="img">
                                            <img src="{{ asset('frontend') }}/img/blog/blog_details_img02.jpg" alt="img">
                                        </div>
                                        <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue
                                        ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset
                                        sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p>
                                        <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor
                                        tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum
                                        Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                                        <div class="blog-post-bottom">
                                            <div class="blog-details-tag">
                                                <i class="fas fa-tags"></i>
                                                <a href="#">Organic</a>
                                                <a href="#">Farming</a>
                                                <a href="#">Food</a>
                                            </div>
                                            <div class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="avatar-post mt-50 mb-90">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="{{ asset('frontend') }}/img/blog/post_avatar_img.png" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Thomas Harrison</h5>
                                                <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitacondimem egestlibers dolosr auctor
                                                tellus, eu consectetur neque.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-comment-wrap mb-80">
                                    <div class="sidebar-title mb-50">
                                        <h3>Comments (2)</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="blog-comment-avatar">
                                                <img src="{{ asset('frontend') }}/img/blog/comment_avatar01.jpg" alt="">
                                            </div>
                                            <div class="blog-comment-content">
                                                <h5><a href="#">Hamil Alexander.</a><span>November 13, 2020</span></h5>
                                                <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor
                                                tellus, eu consectetur neque</p>
                                                <a href="#">REPLY _</a>
                                            </div>
                                        </li>
                                        <li class="children">
                                            <div class="blog-comment-avatar">
                                                <img src="{{ asset('frontend') }}/img/blog/comment_avatar02.jpg" alt="">
                                            </div>
                                            <div class="blog-comment-content">
                                                <h5><a href="#">Cristina Umaña</a><span>November 13, 2020</span></h5>
                                                <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor
                                                tellus, eu consectetur neque</p>
                                                <a href="#">REPLY _</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-reply-box">
                                    <div class="sidebar-title mb-40">
                                        <h3>Leave a Comment</h3>
                                    </div>
                                    <form action="#" class="comment-form">
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <button class="btn gradient-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <aside class="blog-sidebar-wrap">
                                    <div class="widget mb-35">
                                        <div class="sidebar-form">
                                            <form action="#">
                                                <input type="text" placeholder="Search type...">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget mb-35">
                                        <div class="blog-sidebar-inner">
                                            <div class="sidebar-title mb-35">
                                                <h3>Categories</h3>
                                            </div>
                                            <div class="cat-list">
                                                <ul>
                                                    <li><a href="#">Retail & Consumer <span>(14)</span></a></li>
                                                    <li><a href="#">Sciences & Healthcare <span>(09)</span></a></li>
                                                    <li><a href="#">Ocean Freight <span>(03)</span></a></li>
                                                    <li><a href="#">Electricity Freight <span>(02)</span></a></li>
                                                    <li><a href="#">Transportation <span>(07)</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget mb-35">
                                        <div class="blog-sidebar-inner">
                                            <div class="sidebar-title mb-35">
                                                <h3>Recent Posts</h3>
                                            </div>
                                            <div class="rc-post">
                                                <ul>
                                                    <li>
                                                        <div class="rc-post-thumb">
                                                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/img/blog/rc_post_thumb01.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="rc-post-content">
                                                            <h5><a href="blog-details.html">Farming Has A Banking Problem Crop</a></h5>
                                                            <span>November 22, 2020</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rc-post-thumb">
                                                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/img/blog/rc_post_thumb02.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="rc-post-content">
                                                            <h5><a href="blog-details.html">The latest jobs figures propel the lengthy</a></h5>
                                                            <span>November 22, 2020</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rc-post-thumb">
                                                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/img/blog/rc_post_thumb03.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="rc-post-content">
                                                            <h5><a href="blog-details.html">Agriculture Miracle you Don’t Know</a></h5>
                                                            <span>November 22, 2020</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <div class="blog-sidebar-inner">
                                            <div class="sidebar-title mb-25">
                                                <h3>Tags</h3>
                                            </div>
                                            <div class="tag-list">
                                                <ul>
                                                    <li><a href="#">Farming</a></li>
                                                    <li><a href="#">Agriculture</a></li>
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Business</a></li>
                                                    <li><a href="#">Domesticated</a></li>
                                                    <li><a href="#">Who</a></li>
                                                    <li><a href="#">Species</a></li>
                                                    <li><a href="#">Livestock</a></li>
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