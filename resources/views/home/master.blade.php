<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- SITE TITLE -->
{!! SEO::generate() !!}


<!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="asset/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="asset/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="asset/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="asset/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="asset/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="asset/images/apple-touch-icon.png">
    <link rel="icon" href="asset/images/apple-touch-icon.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="{{asset('asset/css/flaticon.css')}}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('asset/css/menu.css')}}" rel="stylesheet">
    <link id="effect" href="{{asset('asset/css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('asset/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">

    <!-- Kalameh font CSS -->
    <link href="{{asset('asset/css/kalameh.css')}}" rel="stylesheet">






</head>
<body>

<!-- PAGE CONTENT
============================================= -->
<div id="page" class="page rtl-direction">

    @include('.home.layout.header')
    @yield('content')
    @include('.home.layout.footer')

</div>
<!-- EXTERNAL SCRIPTS
============================================= -->
<script src="{{asset('asset/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/modernizr.custom.js')}}"></script>
<script src="{{asset('asset/js/jquery.easing.js')}}"></script>
<script src="{{asset('asset/js/jquery.appear.js')}}"></script>
<script src="{{asset('asset/js/jquery.scrollto.js')}}"></script>
<script src="{{asset('asset/js/menu.js')}}"></script>
<script src="{{asset('asset/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('asset/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('asset/js/wow.js')}}"></script>

<!-- Custom Script -->
<script src="{{asset('asset/js/custom.js')}}"></script>

@include('sweetalert::alert')

</body>
</html>
