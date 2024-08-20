<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords"
        content="">
    <meta name="author" content="Roots Ventures">
    <meta name="description" content="Roots Ventures.">
    <meta property="og:title" content="Roots Ventures">
    <meta property="og:description"
        content="Roots Ventures.">
    <meta property="og:type" content="Roots Ventures">
    <meta property="og:image" content="./assets/favicon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ ('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ '/assets/css/owl.carousel.min.css' }}">
    <link rel="stylesheet" href="{{ '/assets/css/owl.theme.default.min.css' }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ ('assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css') }}">
    <link rel="stylesheet" href="{{ ('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ ('assets/css/utility.min.css') }}">
    <link rel="stylesheet" href="{{ ('assets/css/demo/asymmetric-agency/base.css') }}">
    <link rel="stylesheet" href="{{ ('assets/css/demo/asymmetric-agency/asymmetric-agency.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Roots Ventures | رووتز فنتشرز</title>
</head>

<body class="lqd-cc-outer-hidden scroll-content" data-lqd-cc="true" data-mobile-nav-style="modern" data-mobile-nav-breakpoint="1199"
    data-mobile-nav-scheme="dark" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="custom"
    data-mobile-logo-alignment="default">
    
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>


    <div id="wrap">
        <div class="lqd-sticky-placeholder hidden"></div>

            @include('sections.header-footer.header')

        <main class="content bg-center-top bg-repeat z-2" id="lqd-site-content"
            style="background-image: url(assets/images/demo/asymmetric-agency/bg-lines.svg);"
            >

            <div id="lqd-contents-wrap">

            @include('sections.blog.blog')

            </div>
        </main>
        
        @include('sections.header-footer.footer')

    </div>
    @include('sections.modals.contactus')

    <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/utils/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fastdom/fastdom.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flickity/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/lity/lity.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontfaceobserver.js') }}"></script>
    <script src="{{ asset('assets/vendors/fresco/js/fresco.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinycolor-min.js') }}"></script>
    <script src="{{ asset('assets/js/liquid-gdpr.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/liquid-ajax-contact-form.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/partners-slider.js') }}"></script>
    <script src="{{ asset('assets/js/our-ventures.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    
</body>

</html>