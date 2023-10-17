@extends('front-end.master')
@section('title')
    new-car-details
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
                <div class="owl-carousel owl-theme" id="new-cars-carousel">
                    @foreach($newcars as $newcar)
                        <div class="new-cars-item">
                            <div class="single-new-cars-item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12">
                                        <div class="new-cars-img">
                                            <img src="{{ $newcar->image }}" style="width: 400px" >
                                        </div><!--/.new-cars-img-->
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <div class="new-cars-txt">
                                            <h2><a href="{{route('new-cars')}}">{{ $newcar->title }}</a></h2>
                                            <p class="text-danger">
                                                {{ $newcar->category_name }}
                                            </p>
                                            <p class="new-cars-para2">
                                                {{ $newcar->description }}
                                            </p>
                                            <button class="welcome-btn new-cars-btn" onclick="window.location.href='{{route("new-cars")}}'">
                                                view details
                                            </button>
                                        </div><!--/.new-cars-txt-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.single-new-cars-item-->
                        </div><!--/.new-cars-item-->
                    @endforeach
                </div><!--/#new-cars-carousel-->
            </div><!--/.new-cars-content-->
        </div><!--/.container-->

    </section><!--/.new-cars-->
    <!--new-cars end -->
@endsection
