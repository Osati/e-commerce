<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

    <!-- title of site -->
    <title>@yield('title')</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('front-end-assets') }}/logo/favicon.png"/>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/linearicons.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/flaticon.css">

    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/bootsnav.css" >

    <!--style.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset('front-end-assets') }}/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--welcome-hero start -->
<section id="home" class="welcome-hero">

    <!-- top-area Start -->
   @include('front-end.home.header')
    <!-- top-area End -->

   @yield('hero')

</section><!--/.welcome-hero-->
<!--welcome-hero end -->

@yield('content')

<!--contact start-->
@include('front-end.home.footer')
<!--contact end-->



<!-- Include all js compiled plugins (below), or include individual files as needed -->

<script src="{{asset('front-end-assets') }}/js/jquery.js"></script>

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="{{asset('front-end-assets') }}/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="{{asset('front-end-assets') }}/js/bootsnav.js"></script>

<!--owl.carousel.js-->
<script src="{{asset('front-end-assets') }}/js/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--Custom JS-->
<script src="{{asset('front-end-assets') }}/js/custom.js"></script>

</body>

</html>
