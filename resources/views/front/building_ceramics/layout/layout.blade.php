<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    @include('front.building_ceramics.layout.head')
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->
@include('front.building_ceramics.layout.header')
@yield('content')
@include('front.building_ceramics.layout.footer')
@include('front.building_ceramics.layout.script')
</body>
</html>
