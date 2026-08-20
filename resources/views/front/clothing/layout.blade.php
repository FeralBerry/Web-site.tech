<!doctype html>
<html class="no-js" lang="en">
@include('front.clothing.head')
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Body main wrapper start -->
<div class="wrapper home-one">
    @include('front.clothing.header')
    @yield('content')
</div>
@include('front.clothing.script')

</body>

</html>
