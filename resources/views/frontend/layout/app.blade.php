<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Default Title')
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/imgs/theme/favicon.svg') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css?v=5.3') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/slider-range.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css?v=5.3') }}" />

    <!--leaflet map-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body>

    <!-- Include the Model Partial -->
     @include('frontend.model.type1')


    <!-- Include the Header Partial -->
     @include('frontend.layout.header')

    
    <main class="main">

        @if(

            Request::is('login')
        )

        @yield('content')

        @elseif(Request::is('/'))

            <!-- Include the Featured Categories -->
            @include('frontend.slider.featured_categories.type1')

            <!-- Include the banner partial -->
            @include('frontend.slider.banner.type1')

            <!-- Include the Popular Products -->
            @include('frontend.slider.popular_products.type1')

            <!-- Include the daily best sells partial -->
            @include('frontend.slider.daily_best_sells.type1')

            <!-- Include the deal of the day partial -->
            @include('frontend.slider.deal_of_the_day.type1')

            <section class="section-padding mb-30">
                <div class="container">
                    <div class="row">

                        <!-- Include the top selling partial -->
                        @include('frontend.slider.top_selling.type1')

                        <!-- Include the Trending Products partial -->
                         @include('frontend.slider.trending_products.type1')

                         <!-- Include the recently added Patial -->
                         @include('frontend.slider.recently_added.type1')


                    </div>
                </div>
            </section>
            @endif

    </main>

    <!-- Include the Footer Partial -->
     @include('frontend.layout.footer')

    <!-- Include the Preloader Partial -->
    @include('frontend.preloader.type1')

     <!-- Vendor JS-->
    <script src="frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="frontend/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="frontend/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="frontend/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/plugins/slick.js"></script>
    <script src="frontend/js/plugins/jquery.syotimer.min.js"></script>
    <script src="frontend/js/plugins/waypoints.js"></script>
    <script src="frontend/js/plugins/wow.js"></script>
    <script src="frontend/js/plugins/perfect-scrollbar.js"></script>
    <script src="frontend/js/plugins/magnific-popup.js"></script>
    <script src="frontend/js/plugins/select2.min.js"></script>
    <script src="frontend/js/plugins/counterup.js"></script>
    <script src="frontend/js/plugins/jquery.countdown.min.js"></script>
    <script src="frontend/js/plugins/images-loaded.js"></script>
    <script src="frontend/js/plugins/isotope.js"></script>
    <script src="frontend/js/plugins/scrollup.js"></script>
    <script src="frontend/js/plugins/jquery.vticker-min.js"></script>
    <script src="frontend/js/plugins/jquery.theia.sticky.js"></script>
    <script src="frontend/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="frontend/js/main.js?v=5.3"></script>
    <script src="frontend/js/shop.js?v=5.3"></script>
    
</body>
</html>