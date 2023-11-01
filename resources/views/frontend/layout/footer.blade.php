<footer>
    <div class="footer-top footer-bg fix" data-background="{{ asset('frontend') }}/img/bg/footer_bg.jpg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="footer-logo mb-35">
                            @if ($setting->first()->footer_logo != null)
                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></a>
                            @endif
                        </div>
                        <div class="footer-text">
                            @if ( $setting->first()->about != null)
                                <p>{{ $setting->first()->about }}</p>
                            @endif
                            <div class="footer-contact">
                                <ul>
                                    @if ($setting->first()->address != null)
                                        <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>{{ $setting->first()->address }}</li>
                                    @endif
                                    @if ($setting->first()->number != null)
                                        <li><i class="fas fa-headphones"></i> <span>Phone : </span>{{ $setting->first()->number }}</li>
                                    @endif
                                    @if ($setting->first()->email != null)
                                        <li><i class="fas fa-envelope-open"></i><span>Email : </span>{{ $setting->first()->email }}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Pages</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('our.blog') }}">About</a></li>
                                <li><a href="{{ route('our.product') }}">Product</a></li>
                                <li><a href="{{ route('gallerys') }}">Gellary</a></li>
                                <li><a href="{{ route('our.blog') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Need Help?</h5>
                        </div>
                        <div class="footer-blog-post">
                            <ul>
                                <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Follow us</h5>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="{{ $setting->first()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $setting->first()->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $setting->first()->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $setting->first()->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom-shape fb-shape1 running"><img src="{{ asset('frontend') }}/img/images/footer_vector01.png" alt=""></div>
        <div class="footer-bottom-shape fb-shape2"><img src="{{ asset('frontend') }}/img/images/footer_vector02.png" alt=""></div>
        <div class="footer-bottom-shape fb-shape3"><img src="{{ asset('frontend') }}/img/images/footer_vector03.png" class="rotateme" alt=""></div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 m-auto text-center">
                    <div class="copyright-text">
                        @if ($setting->first()->footer != null)
                        <p>{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortech.com/" class="text-primary">Nugortechit</a></p>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</footer>