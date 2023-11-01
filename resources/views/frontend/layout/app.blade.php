
<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @if ($setting->first()->title != null)
            <title>{{ $setting->first()->title }}</title>
        @endif
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/odometer.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
        <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('frontend.layout.header')
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            @yield('content')

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        @include('frontend.layout.footer')
        <!-- footer-area-end -->

		<!-- JS here -->
        {{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
		<script src="{{ asset('frontend') }}/js/vendor/jquery-3.5.0.min.js"></script>
        <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.odometer.min.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.appear.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.countdown.min.js"></script>
        <script src="{{ asset('frontend') }}/js/paroller.js"></script>
        <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
        <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
        <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
        <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
        <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
        <script src="{{ asset('frontend') }}/js/aos.js"></script>
        <script src="{{ asset('frontend') }}/js/plugins.js"></script>
        <script src="{{ asset('frontend') }}/js/main.js"></script>

        <script>
            new VenoBox({
                selector: '.my-image-links',
                numeration: true,
                infinigall: true,
                share: true,
                spinner: 'rotating-plane'
            });
        </script>
        <script>
            new VenoBox({
                selector: '.my-video-links',
            });
        </script>
    </body>
</html>
