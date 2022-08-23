@extends('layouts.app')

@section('content')
    <div class="wrap-body">
        <header>
            <div class="top-header">
                <div class="zerogrid">
                    <div class="row">
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <span><i class="fa fa-map-marker"></i> <strong>Sector-4, Uttara</strong>, Dhaka-1230, Bangladesh</span>
                            </div>
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <span><i class="fa fa-phone"></i> 01740096478</span>
                            </div>
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <span><i class="fa fa-clock-o"></i> Sat-Thu 8:00am-02:00pm, Fri 8:00am-10:00pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo">
                <a href="#">AB Shiddique Fitness</a>
                <span>The Best Fitness Grow Your Strenght</span>
            </div>
            <div id="cssmenu" class="t-left">
                <ul>
                    <li class="active"><a href="index.html"><span>Program</span></a>
                        <ul>
                            <li class="has-sub"><a href="/program/one-on-one"><span>One-on-One Training</span></a></li>
                            <li class="has-sub"><a href="/program/online-fitness-coaching-for-general"><span>Online Fitness Coaching for General</span></a></li>
                            <li class="has-sub"><a href="/program/PCOS"><span>PCOS(Poly-Cystic Ovarian Syndrome)</span></a></li>
                            <li class="has-sub"><a href="/program/HDDA"><span>Heart Disease Diabetes Arthritis</span></a></li>
                            <li class="has-sub"><a href="/program/exersize-and-diet"><span>Exersize and Diet For Older Adults</span></a></li>
                            <li class="has-sub"><a href="/program/customize-diet-plan"><span>Customize Diet Plan</span></a></li>
                            <li class="has-sub"><a href="/program/customize-workout-diet"><span>Customize Workout Diet</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#"><span>Online Live Group Class</span></a>
                        <ul>
                            <li class="has-sub"><a href="#"><span>3 Days In a Week</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="index.html"><span>Shop</span></a>
                        <ul>
                            <li><a href="/shop/shop-all"><span>Shop All</span></a></li>
                            <li><a href="#"><span>Accessories</span></a></li>
                            <li class="last"><a href="#"><span>Apparel</span></a></li>
                        </ul>
                    </li>
                    <li><a href=""><span>Reviews</span></a></li>
                    <li><a href=""><span>Blog</span></a></li>
                    <li><a href=""><span>About</span></a></li>
                    <li class="last"><a href="contact.html"><span>Contact</span></a></li>
                </ul>
            </div>
            <div id="owl-slide" class="owl-carousel">
                @foreach ($banners as $banner)
                    <div class="item">
                        <img src="{{ asset("storage/images/banner/$banner->image") }}" />
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-left">
                                <h1>{{ $banner->header }}</h1>
                                <p>{{ $banner->sub_header }}</p>
                                <a class="button" href="single.html">Let's Start!</a>
                            </div>
                        </div><!-- /header-text -->
                    </div>
                @endforeach
                {{-- <div class="item">
                    <img src="images/AB3.jpg"  width=800 height=500 />
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-left">
                            <h1>START YOUR TRAINING <br>TODAY!</h1>
                            <p>Professional & Personal Trainer</p>
                            <a class="button" href="single.html">Let's Start!</a>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="images/AB2.jpg" />
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-left">
                            <h1>START YOUR TRAINING <br>TODAY!</h1>
                            <p>Professional & Personal Trainer</p>
                            <a class="button" href="single.html">Let's Start!</a>
                        </div>
                    </div><!-- /header-text -->

                </div> --}}
            </div>
        </header>
        <!--////////////////////////////////////Container-->
        <section id="container">
            <div class="wrap-container">
                <!-----------------content-box-about-------------------->
                <section class="content-box box-about">
                    <div class="zerogrid">
                        <div class="wrap-box"><!--Start Box-->
                            <div class="box-header">
                                <h2>What'll You Get</h2>
                            </div>
                            <div class="box-content">
                                <p>Professional & personal fitness trainer,to assist clients in all fitness levels to get into shape & achieve goal.  <br>I offer clients with customized meal plan,workout program,supplement guideline<br>& progress monitoring for achieving the perfect desired shape!<p>
                    </div>
                </section>
                <!-----------------content-box-main-------------------->
                <section class="content-box box-main">
                    <div class="zerogrid">
                        <div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <div class="box-entry">
                                            <video width=287 height=200 controls autoplay muted>
                                            <source src="images/vid1.mp4" class="img-responsive"/>
                                            </video>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Motivation</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020 </span>
                                                        <span><i class="fa fa-heart"></i> 38</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Customized Workout Plan</h3>
                                                    <p>You'll be provided with excellent customized workout plan that will match with your body capacity.</p>
                                                    <p>You can contact me through online or can get offline service as well.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                        <div class="box-entry">
                                            <img src="images/2.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Training</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020</span>
                                                        <span><i class="fa fa-heart"></i> 12</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Personal Training</h3>
                                                    <p>Customized online training with full monitoring. Can be done in gym or fitness center as well.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                        <div class="box-entry">
                                            <video controls autoplay muted>
                                            <source src="images/vid2.mp4" class="img-responsive"/>
                                            </video>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Training</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020 </span>
                                                        <span><i class="fa fa-heart"></i> 34</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Personal Training</h3>
                                                    <p>Customized online training with full monitoring. Can be done in gym or fitness center as well.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <div class="box-entry">
                                            <img src="images/4.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Training</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020 </span>
                                                        <span><i class="fa fa-heart"></i> 16</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Personal Training</h3>
                                                    <p>Customized online training with full monitoring. Can be done in gym or fitness center as well.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                        <div class="box-entry">
                                            <img src="images/5.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Workout</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020 </span>
                                                        <span><i class="fa fa-heart"></i> 16</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <<h3>Customized Workout Plan</h3>
                                                    <p>You'll be provided with excellent customized workout plan that will match with your body capacity.</p>
                                                    <p>You can contact me through online or can get offline service as well.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                        <div class="box-entry">
                                            <img src="images/6.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Healthy Food</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020</span>
                                                        <span><i class="fa fa-heart"></i> 52</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Customized Meal Plan</h3>
                                                    <p>You'll get a customized meal plan according to your body and lifestyle. Everyone knows that a proper diet plan is one of the most important part of being fit and healthy.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <div class="box-entry">
                                            <img src="images/7.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Motivation</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 04/12/2020 </span>
                                                        <span><i class="fa fa-heart"></i> 45</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Customized Workout Plan</h3>
                                                    <p>You'll be provided with excellent customized workout plan that will match with your body capacity.</p>
                                                    <p>You can contact me through online or can get offline service as well.</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                        <div class="box-entry">
                                            <img src="images/8.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Healthy Food</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 25/3/2016 </span>
                                                        <span><i class="fa fa-heart"></i> 12</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Customized Meal Plan</h3>
                                                    <p>You'll get a customized meal plan according to your body and lifestyle. Everyone knows that a proper diet plan is one of the most important part of being fit and healthy.
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                        <div class="box-entry">
                                            <img src="images/9.jpg" class="img-responsive"/>
                                            <div class="entry-details">
                                                <div class="entry-meta ">
                                                    <a class="cat" href="#">Achievement</a>
                                                    <div class="f-right t-right">
                                                        <span><i class="fa fa-calendar"></i> 12/04/2020 </span>
                                                        <span><i class="fa fa-heart"></i> 12</span>
                                                    </div>
                                                </div>
                                                <div class="entry-des">
                                                    <h3>Achieve Your Goal</h3>
                                                    <p>I'll help you to get the body shape you desire.</p>
                                                    <p>You will surely achieve your goal!</p>
                                                </div>
                                                <a class="button" href="single.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
        <!--////////////////////////////////////Footer-->
        <footer>
            <div class="zerogrid wrap-footer">
                <div class="row">
                    <div class="col-1-4 col-footer-1">
                        <div class="wrap-col">
                            <h3 class="widget-title">About Me</h3>
                            <p>{{ $about_me }}</p>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-2">
                        <div class="wrap-col">
                            <h3 class="widget-title">Recent Post</h3>
                            <ul>
                                <li><a href="#">BEST WORKOUT VIDEOS</a></li>
                                <li><a href="#">5 WAYS TO BE FIT</a></li>
                                <li><a href="#">HOW TO START</a></li>
                                <li><a href="#">SUPPLEMENTS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-3">
                        <div class="wrap-col">
                            <h3 class="widget-title">Tag Cloud</h3>
                            <a href="#">trainer</a>
                            <a href="#">workout</a>
                            <a href="#">countries</a>
                            <a href="#">healthy</a>
                            <a href="#">food</a>
                            <a href="#">home</a>
                            <a href="#">traing</a>
                            <a href="#">photo</a>
                            <a href="#">fit</a>
                            <a href="#">law</a>
                            <a href="#">fitness</a>
                            <a href="#">skate</a>
                            <a href="#">scholl</a>
                            <a href="#">video</a>
                            <a href="#">travel</a>
                            <a href="#">images</a>
                            <a href="#">gym</a>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-4">
                        <div class="wrap-col">
                            <h3 class="widget-title">Where to Find Me</h3>
                            <div class="row">
                                <address>
                                    <strong>sector 4, Uttara,</strong>
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
                    Copyright @ AB Shiddique Fitness - Designed by <a href="/">AB</a></a>
                    <ul class="quick-link">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- carousel -->
        <script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
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
@endsection
