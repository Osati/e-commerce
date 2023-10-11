@extends('front-end.master')
@section('title')
    feature-cars
@endsection

@section('hero')
    <div class="container">
        <div class="welcome-hero-txt">
            <h2>get your desired car in resonable price</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore   magna aliqua.
            </p>
            <button class="welcome-btn" onclick="window.location.href='#'">contact us</button>
        </div>
    </div>
@endsection

@section('content')


    <!--featured-cars start -->
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <div class="section-header">
                <p>checkout <span>the</span> featured cars</p>
                <h2>featured cars</h2>
            </div><!--/.section-header-->
            <div class="featured-cars-content">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="{{ $blog->image }}" style="width: 200px">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        {{ $blog->title }}
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2> {{ $blog->category->category_name }}<a href="#"></a></h2>
                                <h3>${{ $blog->product_mrp }}</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.featured-cars-->
    <!--featured-cars end -->

    <!--blog start -->
    <section id="blog" class="blog"></section><!--/.blog-->
    <!--blog end -->
@endsection
