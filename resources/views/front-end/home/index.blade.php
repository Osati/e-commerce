@extends('front-end.master')
@section('title')
    CarVilla
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="model-search-content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-2 col-sm-12">
                            <div class="single-model-search">
                                <h2>select year</h2>
                                <div class="model-select-icon">
                                    <select class="form-control">

                                        <option value="default">year</option><!-- /.option-->

                                        <option value="2018">2018</option><!-- /.option-->

                                        <option value="2017">2017</option><!-- /.option-->
                                        <option value="2016">2016</option><!-- /.option-->

                                    </select><!-- /.select-->
                                </div><!-- /.model-select-icon -->
                            </div>
                            <div class="single-model-search">
                                <h2>body style</h2>
                                <div class="model-select-icon">
                                    <select class="form-control">

                                        <option value="default">style</option><!-- /.option-->

                                        <option value="sedan">sedan</option><!-- /.option-->

                                        <option value="van">van</option><!-- /.option-->
                                        <option value="roadster">roadster</option><!-- /.option-->

                                    </select><!-- /.select-->
                                </div><!-- /.model-select-icon -->
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2 col-sm-12">
                            <div class="single-model-search">
                                <h2>select make</h2>
                                <div class="model-select-icon">
                                    <select class="form-control">

                                        <option value="default">make</option><!-- /.option-->

                                        <option value="toyota">toyota</option><!-- /.option-->

                                        <option value="holden">holden</option><!-- /.option-->
                                        <option value="maecedes-benz">maecedes-benz.</option><!-- /.option-->

                                    </select><!-- /.select-->
                                </div><!-- /.model-select-icon -->
                            </div>
                            <div class="single-model-search">
                                <h2>car condition</h2>
                                <div class="model-select-icon">
                                    <select class="form-control">

                                        <option value="default">condition</option><!-- /.option-->

                                        <option value="something">something</option><!-- /.option-->

                                        <option value="something">something</option><!-- /.option-->
                                        <option value="something">something</option><!-- /.option-->

                                    </select><!-- /.select-->
                                </div><!-- /.model-select-icon -->
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2 col-sm-12">
                            <div class="single-model-search">
                                <h2>select model</h2>
                                <div class="model-select-icon">
                                    <select class="form-control">

                                        <option value="default">model</option><!-- /.option-->

                                        <option value="kia-rio">kia-rio</option><!-- /.option-->

                                        <option value="mitsubishi">mitsubishi</option><!-- /.option-->
                                        <option value="ford">ford</option><!-- /.option-->

                                    </select><!-- /.select-->
                                </div><!-- /.model-select-icon -->
                            </div>
                            <div class="single-model-search">
                                <h2>select price</h2>
                                <div class="model-select-icon">
                                    <select class="form-control">

                                        <option value="default">price</option><!-- /.option-->

                                        <option value="$0.00">$0.00</option><!-- /.option-->

                                        <option value="$0.00">$0.00</option><!-- /.option-->
                                        <option value="$0.00">$0.00</option><!-- /.option-->

                                    </select><!-- /.select-->
                                </div><!-- /.model-select-icon -->
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="single-model-search text-center">
                                <button class="welcome-btn model-search-btn" onclick="window.location.href='#'">
                                    search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!--service start -->
    <section id="service" class="service">
        <div class="container">
            <div class="service-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car"></i>
                            </div>
                            <h2><a href="#">largest dealership <span> of</span> car</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car-repair"></i>
                            </div>
                            <h2><a href="#">unlimited repair warrenty</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car-1"></i>
                            </div>
                            <h2><a href="#">insurence support</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.service-->
    <!--service end-->

    <!--new-cars start -->
    <section id="new-cars" class="new-cars">
        <div class="container">
            <div class="section-header">
                <p>checkout <span>the</span> latest cars</p>
                <h2>newest cars</h2>
            </div><!--/.section-header-->
            <div class="new-cars-content">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="new-cars-img">
                            <img src="{{asset('front-end-assets') }}/images/new-cars-model/ncm1.png" alt="img">
                        </div><!--/.new-cars-img-->
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="new-cars-txt">
                            <h2><a href="#">chevrolet camaro <span> za100</span></a></h2>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="new-cars-para2">
                                Sed ut pers unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </p>
                            <button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
                                view details
                            </button>
                        </div><!--/.new-cars-txt-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.new-cars-content-->
        </div><!--/.container-->

    </section><!--/.new-cars-->
    <!--new-cars end -->

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

    <!-- clients-say strat -->
    <section id="clients-say"  class="clients-say">
        <div class="container">
            <div class="section-header">
                <h2>what our clients say</h2>
            </div><!--/.section-header-->
            <div class="row">
                <div class="owl-carousel testimonial-carousel">
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c1.png" alt="image of clients person" />
                                    </div><!--/.testimonial-img-->
                                </div><!--/.testimonial-info-->
                                <div class="testimonial-comment">
                                    <p>
                                        Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
                                    </p>
                                </div><!--/.testimonial-comment-->
                                <div class="testimonial-person">
                                    <h2><a href="#">tomas lili</a></h2>
                                    <h4>new york</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-description-->
                        </div><!--/.single-testimonial-box-->
                    </div><!--/.col-->
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c2.png" alt="image of clients person" />
                                    </div><!--/.testimonial-img-->
                                </div><!--/.testimonial-info-->
                                <div class="testimonial-comment">
                                    <p>
                                        Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
                                    </p>
                                </div><!--/.testimonial-comment-->
                                <div class="testimonial-person">
                                    <h2><a href="#">romi rain</a></h2>
                                    <h4>london</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-description-->
                        </div><!--/.single-testimonial-box-->
                    </div><!--/.col-->
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c3.png" alt="image of clients person" />
                                    </div><!--/.testimonial-img-->
                                </div><!--/.testimonial-info-->
                                <div class="testimonial-comment">
                                    <p>
                                        Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
                                    </p>
                                </div><!--/.testimonial-comment-->
                                <div class="testimonial-person">
                                    <h2><a href="#">john doe</a></h2>
                                    <h4>washington</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-description-->
                        </div><!--/.single-testimonial-box-->
                    </div><!--/.col-->
                </div><!--/.testimonial-carousel-->
            </div><!--/.row-->
        </div><!--/.container-->

    </section><!--/.clients-say-->
    <!-- clients-say end -->

    <!--brand strat -->
    <section id="brand"  class="brand">
        <div class="container">
            <div class="brand-area">
                <div class="owl-carousel owl-theme brand-item">
                    <div class="item">
                        <a href="#">
                            <img src="assets/images/brand/br1.png" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                    <div class="item">
                        <a href="#">
                            <img src="assets/images/brand/br2.png" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                    <div class="item">
                        <a href="#">
                            <img src="assets/images/brand/br3.png" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                    <div class="item">
                        <a href="#">
                            <img src="assets/images/brand/br4.png" alt="brand-image" />
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#">
                            <img src="assets/images/brand/br5.png" alt="brand-image" />
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#">
                            <img src="assets/images/brand/br6.png" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                </div><!--/.owl-carousel-->
            </div><!--/.clients-area-->

        </div><!--/.container-->

    </section><!--/brand-->
    <!--brand end -->

    <!--blog start -->
    <section id="blog" class="blog"></section><!--/.blog-->
    <!--blog end -->
@endsection
