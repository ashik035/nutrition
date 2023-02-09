@extends('layouts.app')

@section('content')
    <div class="wrap-body">
        <header>
            <div id="owl-slide" class="owl-carousel">
                @foreach ($banners as $banner)
                    <div class="item">
                        <img src="{{ asset("storage/images/banner/$banner->image") }}" />
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-left">
                                <h1>{{ $banner->header }}</h1>
                                <p>{{ $banner->sub_header }}</p>
                                <a class="button" href="/">Let's Start!</a>
                            </div>
                        </div><!-- /header-text -->
                    </div>
                @endforeach
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
                                <p>Nutritive components of food are those elements that provide a considerable quantity of energy to the system, such as protein, carbohydrates, and fats, all of which are essential to the body. Emphasizes fruits, vegetables, whole grains, and fat-free or low-fat milk and milk products. Includes a variety of protein foods such as seafood, lean meats and poultry, eggs, legumes (beans and peas), soy products, nuts, and seeds. Is low in added sugars, sodium, saturated fats, trans fats, and cholesterol. <br><br>This site is offers credible information to help you make healthful eating choices.<p>
                    </div>
                </section>
                <!-----------------content-box-main-------------------->
                <section class="content-box box-main">
                    <div class="zerogrid">
                        <div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                @if (isset($posts) && $posts != '')
                                    @foreach ($posts as $post)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="wrap-col">
                                            <div class="box-entry text-center post_box">
                                                @if ( $post->type == 'image' )
                                                    <img src="{{ asset("storage/images/post/$post->media") }}" alt="post">
                                                @elseif ( $post->type == 'video' )
                                                    <video class="text-center" controls autoplay muted>
                                                        <source src="{{ asset("storage/videos/post/$post->media")}}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @else
                                                    <iframe src="{{ $post->media }}" frameborder="0" allowfullscreen></iframe>
                                                @endif
                                                <div class="entry-details">
                                                    <div class="entry-meta ">
                                                        <span>{{$post->category}}</span>
                                                        <div class="f-right t-right">
                                                            <span><i class="fa fa-calendar"></i> {{$post->created_at->format('d/m/Y')}} </span>
                                                        </div>
                                                    </div>
                                                    <div class="entry-des">
                                                        <h3>{{$post->title}}</h3>
                                                        <p>{{$post->details}}</p>
                                                    </div>
                                                    <a class="button" href="#app">Start Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
@endsection
