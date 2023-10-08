<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('back-end-assets')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('back-end-assets')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('back-end-assets')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('back-end-assets')}}/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('back-end-assets')}}/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">


        <!-- top navigation -->
        @include('back-end.home.include.left-sidebar')
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">

                @include('back-end.home.include.header')

                <div class="clearfix"></div>

                @yield('content')

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('back-end.home.include.footer')
        <!-- /footer content -->
    </div>
</div>



<!-- jQuery -->
<script src="{{ asset('back-end-assets')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('back-end-assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('back-end-assets')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('back-end-assets')}}/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ asset('back-end-assets')}}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="{{ asset('back-end-assets')}}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="{{ asset('back-end-assets')}}/vendors/google-code-prettify/src/prettify.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('back-end-assets')}}/build/js/custom.min.js"></script>

</body>
</html>
