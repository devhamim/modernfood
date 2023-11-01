<header>
    <div id="sticky-header" class="main-header menu-area transparent-header">
        <div class="container-fluid container-full">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <div class="header-bg" data-background="{{ asset('frontend') }}/img/bg/header_bg.jpg"></div>
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    @if ($setting->first()->logo != null)
                                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                                    @endif
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('about_us') }}">About</a></li>
                                    <li><a href="{{ route('our.clients') }}">Concern</a></li>
                                    <li><a href="{{ route('our.product') }}">Product</a></li>
                                    <li><a href="{{ route('gallerys') }}">Gallery</a></li>
                                    <li><a href="{{ route('our.team') }}">Team</a></li>
                                    <li><a href="{{ route('our.blog') }}">Blog</a></li>
                                    <li><a href="{{ route('our.media') }}">Media</a></li>
                                    <li><a href="{{ route('contect') }}">contacts</a></li>
                                    <li class="header-btn"></li>
                                </ul>
                                
                            </div>
                            <div class="header-action d-none d-md-block">
                                <a href="{{ route('register.dealerform') }}" class="btn gradient-btn">Dealer Form</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo">
                            <a href="{{ url('/') }}">
                                @if ($setting->first()->logo != null)
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                                @endif
                            </a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="{{ $setting->first()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $setting->first()->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $setting->first()->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $setting->first()->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>