@extends('front-end.master')
@section('title')
    new-cars
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


    <!--blog start -->
    <section id="blog" class="blog"></section><!--/.blog-->
    <!--blog end -->
@endsection
