<!DOCTYPE html>
<head>
<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Soufia's Nutrition </title>
	<meta name="description" content="AB Shiddique (Fitness Trainer) ">
	<meta name="author" content="AB Shiddique">

    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="{{ asset('css/zerogrid.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
	<script src="{{ asset('js/jquery1111.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/script.js') }}"></script>

	<!-- Owl Carousel Assets -->
    <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app" class="home-page">
        <div class="wrap-body">
            <header>
                <div class="top-header">
                    <div class="zerogrid">
                        <div class="row">
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    {{-- <a href="/"><img class="logo_img" src="{{ asset("storage/images/logo/logo-02.png") }}" alt="logo"></a> --}}
                                </div>
                            </div>
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    <a href="/"><img class="logo_img" src="{{ asset("storage/images/logo/sou.png") }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    {{-- <a href="/"><img class="logo_img" src="{{ asset("storage/images/logo/logo-02.png") }}" alt="logo"></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class=" ">
                    <div class="zerogrid">
                        <div class="row">
                            <div class="col-1-3">
                                <div class="wrap-col">
                                </div>
                            </div>
                            <div class="col-1-3">
                                <div class="wrap-col mt-3 mb-3">
                                    <a href="/"><img class="logo_img" src="{{ asset("storage/images/logo/logo-02.png") }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-1-3">
                                <div class="wrap-col">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div id="cssmenu" class="t-left">
                    <ul>
                        <li class="active has-sub"><a href="#"><span>Offline Appointment</span></a>
                            <ul>
                                <li class="has-sub"><a href="/program/one-on-one"><span>One-on-One Training</span></a></li>
                                <li class="has-sub"><a href="/program/online-fitness-coaching-for-general"><span>Online Fitness Coaching for General</span></a></li>
                                <li class="has-sub"><a href="/program/PCOS"><span>PCOS(Poly-Cystic Ovarian Syndrome)</span></a></li>
                                <li class="has-sub"><a href="/program/HDDA"><span>Heart Disease Diabetes Arthritis</span></a></li>
                                <li class="has-sub"><a href="/program/Exersise-and-diet"><span>Exersise and Diet For Older Adults</span></a></li>
                                <li class="has-sub"><a href="/program/customize-diet-plan"><span>Customize Diet Plan</span></a></li>
                                <li class="has-sub"><a href="/program/customize-workout-diet"><span>Customize Workout Diet</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#"><span>Online Appointment</span></a>
                            <ul>
                                <li class="has-sub"><a href="/program/three_days_in_a_week"><span>3 Days In a Week</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Order Products</span></a>
                            <ul>
                                <li><a href="/shop/shop-all"><span>Shop All</span></a></li>
                                <li><a href="/shop/accessories"><span>Accessories</span></a></li>
                                <li class="last"><a href="/shop/apparel"><span>Apparel</span></a></li>
                            </ul>
                        </li>
                        <li><a href="/review"><span>Customer Feedback</span></a></li>
                        <li><a href="/blog"><span>Stories</span></a></li>
                        <li><a href="#footer"><span>Explore Us</span></a></li>
                        <li class="last"><a href="/contact"><span>Find Us</span></a></li>
                    </ul>
                </div>
            </header>
        </div>

        <main>
            @yield('content')
        </main>
        <footer id="footer">
            <div class="zerogrid wrap-footer">
                <div class="row">
                    <div class="col-1-4 col-footer-1">
                        <div class="wrap-col">
                            <h3 class="widget-title">About Us</h3>
                            <p> It serves as a gateway to reliable information on nutrition, healthy eating, physical activity, and food safety for consumers. The site is updated on an ongoing basis by a staff of Registered Dietitians at the Food
                            </p>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-2">
                        <div class="wrap-col">
                            <h3 class="widget-title">Latest Post</h3>
                            <ul>
                                <li><a href="#">Follow the rules</a></li>
                                <li><a href="#">Exersise More</a></li>
                                <li><a href="#">Balance your life</a></li>
                                <li><a href="#">We are here for you</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-3">
                        <div class="wrap-col">
                            <h3 class="widget-title">Follow Tags</h3>
                            <a href="#">Balance Diet</a>
                            <a href="#">Eat Less</a>
                            <a href="#">Get List</a>
                            <a href="#">Join Today</a>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-4">
                        <div class="wrap-col">
                            <h3 class="widget-title">Location</h3>
                            <div class="row">
                                <address>
                                    <strong>Basundhora,</strong>
                                    <br>
                                    Dhaka
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="zerogrid wrapper">
                    Copyright @ Soufia nutrition center - Designed by <a href="/">Soufia</a></a>
                    <ul class="quick-link">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $("#owl-slide").owlCarousel({
                autoPlay: 3000,
                items : 1,
                itemsDesktop : [1199,1],
                itemsDesktopSmall : [979,1],
                itemsTablet : [768, 1],
                itemsMobile : [479, 1],
                navigation: true,
                navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                pagination: false
                });
            });
        </script>
    </div>
</body>
</html>
